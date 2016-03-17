//
//  LocationModel.swift
//  iOS_MySQL
//
//  Created by Gerd Richter on 17.03.16.
//  Copyright © 2016 wirelesscoder. All rights reserved.
//

import Foundation

class LocationModel: NSObject {

    //properties 
    var nummer: String?
    var name: String?
    var email: String?

    //empty constructor
    
    override init()
    {
    
    }
    
    //construct with @nummer, @name, @email
    init(nummer: String, name: String, email: String) {
        self.nummer = nummer
        self.name = name
        self.email = email
    }
    
    //prints object's current state
    override var description: String {
        return "Nummer: \(nummer), Name: \(name), Email: \(email)"
    }


}



