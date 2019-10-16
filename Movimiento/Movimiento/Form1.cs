using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Movimiento
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void Form1_KeyDown(object sender, KeyEventArgs e)
        {
            // Obtener el valor de la tecla
            var keyValue = e.KeyValue;

            var posicionX = label1.Location.X;
            var posicionY = label1.Location.Y;

           

            // MessageBox.Show( posicionX.ToString() );
            // MessageBox.Show( posicionY.ToString() );

            // label1.Location = new System.Drawing.Point(0, 0);



            //Cambiar color 

            if (keyValue == 67)
            {
                MessageBox.Show("Cambiando Color");

                var random = new Random();

                var numeroAleatorio = random.Next(0, 5);
                MessageBox.Show(numeroAleatorio.ToString());
    



            //Listado de colores 

        Color [] colores = {Color.Blue, Color.Red, Color.Green, Color.Peru, Color.PowderBlue, Color.PapayaWhip, Color.PaleTurquoise};


        MessageBox.Show(colores[numeroAleatorio].ToString());


        //label1.BackColor = colores[numeroAleatorio];



        label1.BackColor = Color.FromArgb (255, 0, 0);




            }



            // Izquierda
            if (keyValue == 37 || keyValue == 65)
            {
                var anchoPadre = label1.Width;
                var anchoHijo = label2.Width;
                var margen = label1.Location.X;

                 var  CentroX = ((anchoPadre + anchoHijo) / 2) - margen;


                if (posicionX <= 15)
                {
                    return;
                }
                // MessageBox.Show("Flecha a la izquierda");
                label1.Location = new System.Drawing.Point(posicionX - 5, posicionY);
                label2.Text = label1.Location.ToString();
            }

            // Derecha
            if (keyValue == 39 || keyValue == 68)
            {

                if (posicionX >= 332)
                {
                    return;
                }
                // MessageBox.Show("Flecha a la derecha");
                label1.Location = new System.Drawing.Point(posicionX + 5, posicionY);
                label2.Text = label1.Location.ToString();
            }

            // Abajo
            if (keyValue == 40 || keyValue == 83)
            {

                if (posicionY >= 409)
                {
                    return;
                }
                // MessageBox.Show("Flecha para abajo");
                label1.Location = new System.Drawing.Point(posicionX, posicionY + 5);
                label2.Text = label1.Location.ToString();
            }

            // Arriba
            if (keyValue == 38 || keyValue == 87)
            {

                if (posicionY <= 39)
                {
                    return;
                }
                // MessageBox.Show("Flecha para arriba");
                label1.Location = new System.Drawing.Point(posicionX, posicionY - 5);
                label2.Text = label1.Location.ToString();
            }
            
        }

        private void Form1_KeyPress(object sender, KeyPressEventArgs e)
        {

        }

        private void Form1_KeyUp(object sender, KeyEventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

            var locationX = e.Location.X;
            var locationY = e.Location.Y;

            label2.Location = new System.Drawing. Point (Location.X, Location.Y);



        }

        private void o(object sender, PreviewKeyDownEventArgs e)
        {

        }

        private void label3_MouseMove(object sender, MouseEventArgs e)
        {
            //MessageBox.Show("Te estas moviendo");


        }

        private void label1_MouseMove(object sender, MouseEventArgs e)
        {
            
        System.Diagnostics.Trace.WriteLine(Location);
        }

        private void label3_Click(object sender, EventArgs e)
        {

            {
                var location = e.Location;

                System.Diagnostics.Trace.WriteLine(Location);
            }
        }
    }
}
