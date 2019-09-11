using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Pruebas
{
    #region Users
    public class Users
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected string _email;
        protected string _phone;
        #endregion
        #region Constructors
        public Users() { }
        public Users(string name, string email, string phone)
        {
            this._name=name;
            this._email=email;
            this._phone=phone;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Phone
        {
            get {return _phone;}
            set {_phone=value;}
        }
        #endregion
    }
    #endregion
}