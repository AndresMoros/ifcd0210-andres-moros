using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace NET_Framework_1
{
    public partial class vetana_prueba: Form
    {
        public vetana_prueba()
        {
            InitializeComponent();
        }

        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            string edad = tedad.Text;
            string nombre = texto1.Text;
            texto2.Text = $"Hola, {nombre}, tienes {edad} años";
            texto1.Text = "";
        }

        private void textBox9_TextChanged(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            double numero1 = double.Parse(num1.Text);
            double numero2 = double.Parse(num2.Text);

            double operacion = numero1 * numero2;

            result.Text = operacion.ToString();

           num1.= = "";
            num2.Text = "";

        }
    }
}