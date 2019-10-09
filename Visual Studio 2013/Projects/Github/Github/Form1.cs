using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Github
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void linkLabel1_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
        System.Diagnostics.Process.Start("https://github.com/join");

        }

        private void linkLabel3_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            System.Diagnostics.Process.Start("https://github.com/enterprise");
        }

        private void linkLabel2_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            //llamar el formulario queremos usar 
            var formularioSignIn = new FormsignIn();

            //monstrar el formulario
            formularioSignIn.Show();

            //cerrar el actual
            //this.Close();
        
        }

        private void linkLabel4_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            //llamar el formulario queremos usar 
            var formularioFormconfigure = new Formconfigure();

            //monstrar el formulario
            formularioFormconfigure.Show();
        }
    }
}
