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
            var num4 = Convert.ToDouble(txtbo4.Text);

            promedio = (num1 + num2 + num3 + num4) / 4;

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
            res.Text = ("distancia:" + distancia );

        }

        private void label10_Click(object sender, EventArgs e)
        {

        }

        private void numericUpDown1_ValueChanged_1(object sender, EventArgs e)
        {

        }

        private void button3_Click(object sender, EventArgs e)
        {
            var eda = Convert.ToInt32(edad.Text);

            if (eda < 0)
            {
                MessageBox.Show("La edad no puede ser negativo ");
            }
            else
            {

                 var naci = 2019 - eda;

                //MessageBox.Show("El edad tu tienes  es " + naci.ToString() );
                re.Text = ("naci "+ naci.ToString());
        
            }

        }

        private void resul_Click(object sender, EventArgs e)
        {

        }

        private void label5_Click(object sender, EventArgs e)
        {

        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void button4_Click(object sender, EventArgs e)
        {
           
var dia = Convert.ToInt32(ttbo1.Text);

if (dia <1 && dia >=8)
{
    MessageBox.Show("EL dias no puede ser menor de 1 or mayor que 7");

}else if (dia == 1) {
   //MessageBox.Show("Lunes");
   ew.Text = ("Lunes");
}

else if (dia == 2) {
    //MessageBox.Show("Martes");
    ew.Text = ("Martes");
}

else if (dia == 3) {
    //MessageBox.Show("Miercoles");
    ew.Text = ("Miercoles");
}

else if (dia == 4) {
   // MessageBox.Show("Jueves");
    ew.Text = ("Jueves");
}

else if (dia == 5) {
   // MessageBox.Show("Viernes");
    ew.Text = ("Viernes");
}

else if (dia == 6) {
   // MessageBox.Show("Sabado");
    ew.Text = ("Sabado");
}

else if (dia == 7) {
   // MessageBox.Show("Domingo");
    ew.Text = ("Domingo");
}

        }

        private void button5_Click(object sender, EventArgs e)
        {
            var Meses = Convert.ToInt32(ttbo2.Text);

if (Meses <1 && Meses >=13)
{
    MessageBox.Show("Los Meses no puede ser menor de 1 or mayor que 13");

}else if (Meses == 1) {
   //MessageBox.Show("January");
   er.Text = ("January");
}

else if (Meses == 2) {
    //MessageBox.Show("February");
    er.Text = ("February");
}

else if (Meses == 3) {
    //MessageBox.Show("March");
    er.Text = ("March");
}

else if (Meses == 4) {
   // MessageBox.Show("March");
    er.Text = ("April");
}

else if (Meses == 5) {
   // MessageBox.Show("May");
    er.Text = ("May");
}

else if (Meses == 6) {
   // MessageBox.Show("Jule");
    er.Text = ("Jule");
}
else if (Meses == 7)
{
    // MessageBox.Show("July");
    er.Text = ("July");
}

else if (Meses == 8) {
   // MessageBox.Show("August");
    er.Text = ("August");
} else if (Meses == 9) {
   // MessageBox.Show("September");
    er.Text = ("September");
}
else if (Meses == 10) {
   // MessageBox.Show("October");
    er.Text = ("October");
}
            else if (Meses == 11) {
   // MessageBox.Show("November");
    er.Text = ("November");
}
            else if (Meses == 12) {
   // MessageBox.Show("December");
    er.Text = ("December");
}

       }

        private void label13_Click(object sender, EventArgs e)
        {
            
    }

        private void button6_Click(object sender, EventArgs e)
        {
        for (int i = 0; i <= 100; i++) {
  if(i%2 == 0)
   listBox1.Items.Add (i);
}
        }
    }
}

 

