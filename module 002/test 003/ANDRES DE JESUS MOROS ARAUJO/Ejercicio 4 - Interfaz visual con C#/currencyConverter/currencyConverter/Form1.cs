using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Globalization;

namespace currencyConverter
{
    public partial class Form1: Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void cant_euros_Click(object sender, EventArgs e)
        {
            if (cant_euros.Text == "Cantidad (€)")
            {
                cant_euros.Text = "";
                cant_euros.ForeColor = System.Drawing.Color.Black;
            }
        }

        private void btn_Click(object sender, EventArgs e)
        {
            double euros = double.Parse(cant_euros.Text.replace(".",","));

            if(euros >= 0)
            {
                if(dolar.Checked)
            {
                double dolarVal = 1.05;
                output.Text = (euros * dolarVal).ToString() + " $";

            }

            if (libra.Checked)
            {
                double libraVal = 0.83;
                output.Text = (euros * libraVal).ToString() + " £";
            }

            if (yen.Checked)
            {
                double yenVal = 141.43;
                output.Text = (euros * yenVal).ToString() + " ¥";
            }

            if (yuan.Checked)
            {
                double yuanVal = 7.03;
                output.Text = (euros * yuanVal).ToString() + " ¥";
            }
            } else
            {
                output.Text = "No se admiten valores negativos";
            }
        }
    }
}
