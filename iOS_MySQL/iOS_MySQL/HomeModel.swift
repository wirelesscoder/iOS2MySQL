//
//  HomeModel.swift
//  iOS_MySQL
//
//  Created by Gerd Richter on 17.03.16.
//  Copyright © 2016 wirelesscoder. All rights reserved.
//

import Foundation

protocol HomeModelProtocal: class {
    func itemsDownloaded(items: NSArray)
}


class HomeModel: NSObject, NSURLSessionDataDelegate {
    
    //properties
    
    weak var delegate: HomeModelProtocal!
    
    var data : NSMutableData = NSMutableData()
    
    let urlPath: String = "http://wirelesscoder.com/playground/webservice/webservice.php" //this will be changed to the path where service.php lives
    
    
    func downloadItems() {
        
        let url: NSURL = NSURL(string: urlPath)!
        var session: NSURLSession!
        let configuration = NSURLSessionConfiguration.defaultSessionConfiguration()
        
        
        session = NSURLSession(configuration: configuration, delegate: self, delegateQueue: nil)
        
        let task = session.dataTaskWithURL(url)
        
        task.resume()
        
    }
    
    func URLSession(session: NSURLSession, dataTask: NSURLSessionDataTask, didReceiveData data: NSData) {
        self.data.appendData(data);
        
    }
    
    func URLSession(session: NSURLSession, task: NSURLSessionTask, didCompleteWithError error: NSError?) {
        if error != nil {
            print("Failed to download data")
        }else {
            print("Data downloaded")
            self.parseJSON()
        }
        
    }
    
    
    func parseJSON() {
    
        var jsonResult: NSMutableArray = NSMutableArray()
        
        do {
            jsonResult = try NSJSONSerialization.JSONObjectWithData(self.data, options: NSJSONReadingOptions.AllowFragments) as! NSMutableArray
            
        } catch let error as NSError {
            print(error)
            
        }
        
        var jsonElement: NSDictionary = NSDictionary()
        let userEntrys: NSMutableArray = NSMutableArray()
        
        for(var i = 0; i < jsonResult.count; i++)
        {
            jsonElement = jsonResult[i] as! NSDictionary
            let userEntry = LocationModel()
            
            if let nummer = jsonElement["nummer"] as? String,
                let name = jsonElement["name"] as? String,
                let email = jsonElement["email"] as? String
            {
                userEntry.nummer = nummer
                userEntry.name = name
                userEntry.email = email
            }
            
            userEntrys.addObject(userEntry)
        }
        
        dispatch_async(dispatch_get_main_queue(), { () -> Void in self.delegate.itemsDownloaded(userEntrys)})
        
        
    }
}