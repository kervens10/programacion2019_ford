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
    public partial class FormsignIn : Form
    {
        public FormsignIn()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            //llamar el formulario queremos usar 
            var formularioFormMake = new FormMake();

            //monstrar el formulario
            formularioFormMake.Show();
        }

        private void linkLabel1_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            System.Diagnostics.Process.Start("https://github.com/password_reset");
        }

        private void linkLabel2_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            System.Diagnostics.Process.Start("https://github.com/login");
        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void txtUsername_TextChanged(object sender, EventArgs e)
        {
            var longitudUsername = txtUsername.Text.Length;
            var longitudPassword = txtpassword.Text.Length;

            if (longitudUsername > 0 && longitudPassword > 0)
            {
                btnsignin.Enabled = true;

            }
            else
            {
                btnsignin.Enabled = false;
            }
        }

        private void txtpassword_TextChanged(object sender, EventArgs e)
        {
            var longitudUsername = txtUsername.Text.Length;
            var longitudPassword = txtpassword.Text.Length;

            if (longitudUsername > 0 && longitudPassword > 0)
            {
                btnsignin.Enabled = true;

            }
            else
            {
                btnsignin.Enabled = false;
            }
        }

    }
}
