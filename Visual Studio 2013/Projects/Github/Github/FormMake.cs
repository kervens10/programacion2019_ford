﻿using System;
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
    public partial class FormMake : Form
    {
        public FormMake()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
    
        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void linkLabel1_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            System.Diagnostics.Process.Start("https://desktop.github.com/");
        }

        private void chkUsage_CheckedChanged(object sender, EventArgs e)
        {
            btnFinish.Enabled = chkUsage.Checked;
        }

        private void FormMake_Load(object sender, EventArgs e)
        {

        }
    }
}
