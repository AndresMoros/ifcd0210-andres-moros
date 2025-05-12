using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Controles_2
{
    public partial class Form1: Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            //string password = "1234";
            string[] passwords_list = {"1234", "30662123", "pizza"};
            string[] users_list = {"kuker", "angel", "caprichosa"};
            string[] user_input = { username.Text, passkey.Text };

            for(int i = 0; i < users_list.Length; i++)
            {
                if (users_list.Contains(user_input[0])) 
                {
                    if (passwords_list.Contains(user_input[1])) 
                    {
                        output1.Text = "Datos correctos";
                        break;
                    }
                    else
                    {
                        output1.Text = "Clave incorrecta";
                        break;
                    }
                }
                else
                {
                    output1.Text = "Usuario no existe";
                    break;
                }
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            sumResult.Text = "Resultado: ";
            double numSum1 = double.Parse(sumNum1.Text);
            double numSum2 = double.Parse(sumNum2.Text);

            double result = numSum1 + numSum2;

            sumResult.Text += result.ToString();
            //sumResult.Text += (double.Parse(sumNum1.Text) + double.Parse(sumNum2.Text)).ToString();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            restResult.Text = "Resultado: ";
            restResult.Text += (double.Parse(restNum1.Text) - double.Parse(restNum2.Text)).ToString();
        }
    }
}
