﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.ServiceModel.Web;
using System.Text;
using WorkWithMe.BL;

namespace WorkWithMe.SL
{
    // NOTE: You can use the "Rename" command on the "Refactor" menu to change the interface name "IService1" in both code and config file together.
    [ServiceContract]
    public interface IWorkWithMeService
    {

        [OperationContract]
        CUser DoLogin(string username, string password);

        [OperationContract]
        bool CreateUser(string username, string password, string firstname, string middleInitial, string lastName, int? zip, string address, bool isAddressPrivate, ref string response);
    }
}
