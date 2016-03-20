//: Playground - noun: a place where people can play

import UIKit

let url = NSURL(string: "http://wwww.10centsnippets.com/webservice.php")
let task = NSURLSession.sharedSession().dataTaskWithURL(url!) {(data, response, error) in
    print(NSString(data: data!, encoding: NSUTF8StringEncoding))
}
task.resume()
