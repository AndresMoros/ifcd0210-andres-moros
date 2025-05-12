using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Controles_1
{
    public partial class Form1: Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void tableLayoutPanel1_Paint(object sender, PaintEventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void btn1_Click(object sender, EventArgs e)
        {
            // Para la interpolación de expresiones en las cadenas de texto se hace de la siguiente manera: $"Texto genérico {var}"
            //saludo.Text = $"{nombre.Text}, ¿cómo estás?";
            saludo.Text = nombre.Text + ", ¿cómo estás?";
            nombre.Text = "";
        }

        private void diferencia_Click(object sender, EventArgs e)
        {
            uint y1 = uint.Parse(year1.Text);
            uint y2 = uint.Parse(year2.Text);

            //int dif = y1 > y2 ? y1 - y2 : y2  - y1;
            uint dif = y1 - y2;

            result.Text = dif.ToString();

            year1.Text = "";
            year2.Text = "";
        }

        private void redBtn_Click(object sender, EventArgs e)
        {
            output.Text = "Botón rojo pulsado";
        }

        private void greenBtn_Click(object sender, EventArgs e)
        {
            output.Text = "Botón verde pulsado";

        }

        private void blueBtn_Click(object sender, EventArgs e)
        {
            output.Text = "Botón azul pulsado";

        }
    }
}
