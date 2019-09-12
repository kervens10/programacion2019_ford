using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace App
{
    #region Cartas
    public class Cartas
    {
        #region Member Variables
        protected unknown _id;
        protected string _name;
        protected string _link;
        protected unknown _price;
        #endregion
        #region Constructors
        public Cartas() { }
        public Cartas(string name, string link, unknown price)
        {
            this._name=name;
            this._link=link;
            this._price=price;
        }
        #endregion
        #region Public Properties
        public virtual unknown Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Link
        {
            get {return _link;}
            set {_link=value;}
        }
        public virtual unknown Price
        {
            get {return _price;}
            set {_price=value;}
        }
        #endregion
    }
    #endregion
}