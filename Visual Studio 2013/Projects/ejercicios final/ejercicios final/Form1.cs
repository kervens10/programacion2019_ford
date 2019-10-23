using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ejercicios_final
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void resultado_Click(object sender, EventArgs e)
        {

        }

        private void hipotenus_Click(object sender, EventArgs e)
        {
            double hipotenusa;

            var bas = Convert.ToDouble(txtbox1.Text);
            var altura = Convert.ToDouble(txtbox2.Text);

            hipotenusa = Math.Sqrt((bas * bas + altura * altura));

            //MessageBox.Show("El hipotenusa es " + hipotenusa);
            resultado.Text = ("hipotenusa:" + hipotenusa);
        }

        private void button1_Click(object sender, EventArgs e)
        {
            double promedio;

            var num1 = Convert.ToDouble(txtbo1.Text);
            var num2 = Convert.ToDouble(txtbo2.Text);
            var num3 = Convert.ToDouble(txtbo3.Text);

            promedio = (num1 + num2 + num3) / 3;

            //MessageBox.Show("El promedio de los numeros son " + promedio );
            resul.Text = ("promedio:" + promedio);

        }

        private void numericUpDown1_ValueChanged(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            double distancia;

            var vec = Convert.ToDouble(vec1.Text);
            var tiempo = Convert.ToDouble(vec2.Text);

            distancia = vec * tiempo;

            //MessageBox.Show("La distancia es " + distancia );
            res.Text = ("distancia:" + distancia);

        }
    }
}
