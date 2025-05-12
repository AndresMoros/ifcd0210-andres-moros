namespace Controles_1
{
    partial class Form1
    {
        /// <summary>
        /// Variable del diseñador necesaria.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpiar los recursos que se estén usando.
        /// </summary>
        /// <param name="disposing">true si los recursos administrados se deben desechar; false en caso contrario.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código generado por el Diseñador de Windows Forms

        /// <summary>
        /// Método necesario para admitir el Diseñador. No se puede modificar
        /// el contenido de este método con el editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.panel1 = new System.Windows.Forms.Panel();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.btn1 = new System.Windows.Forms.Button();
            this.nombre = new System.Windows.Forms.TextBox();
            this.saludo = new System.Windows.Forms.Label();
            this.panel2 = new System.Windows.Forms.Panel();
            this.result = new System.Windows.Forms.Label();
            this.year1 = new System.Windows.Forms.TextBox();
            this.diferencia = new System.Windows.Forms.Button();
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.year2 = new System.Windows.Forms.TextBox();
            this.label6 = new System.Windows.Forms.Label();
            this.panel3 = new System.Windows.Forms.Panel();
            this.output = new System.Windows.Forms.Label();
            this.redBtn = new System.Windows.Forms.Button();
            this.label9 = new System.Windows.Forms.Label();
            this.greenBtn = new System.Windows.Forms.Button();
            this.blueBtn = new System.Windows.Forms.Button();
            this.panel1.SuspendLayout();
            this.panel2.SuspendLayout();
            this.panel3.SuspendLayout();
            this.SuspendLayout();
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.LightBlue;
            this.panel1.Controls.Add(this.saludo);
            this.panel1.Controls.Add(this.nombre);
            this.panel1.Controls.Add(this.btn1);
            this.panel1.Controls.Add(this.label2);
            this.panel1.Controls.Add(this.label1);
            this.panel1.Location = new System.Drawing.Point(41, 12);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(437, 301);
            this.panel1.TabIndex = 0;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Cascadia Code", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(139, 19);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(168, 32);
            this.label1.TabIndex = 0;
            this.label1.Text = "Ejercicio 1";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Cascadia Code", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(166, 68);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(103, 15);
            this.label2.TabIndex = 1;
            this.label2.Text = "¿Cómo te llamas?";
            // 
            // btn1
            // 
            this.btn1.Font = new System.Drawing.Font("Cascadia Code", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn1.Location = new System.Drawing.Point(175, 148);
            this.btn1.Name = "btn1";
            this.btn1.Size = new System.Drawing.Size(75, 23);
            this.btn1.TabIndex = 2;
            this.btn1.Text = "Saludar";
            this.btn1.UseVisualStyleBackColor = true;
            this.btn1.Click += new System.EventHandler(this.btn1_Click);
            // 
            // nombre
            // 
            this.nombre.Location = new System.Drawing.Point(145, 102);
            this.nombre.Name = "nombre";
            this.nombre.Size = new System.Drawing.Size(146, 20);
            this.nombre.TabIndex = 3;
            // 
            // saludo
            // 
            this.saludo.AutoSize = true;
            this.saludo.BackColor = System.Drawing.Color.LightSalmon;
            this.saludo.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.saludo.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.saludo.Font = new System.Drawing.Font("Cascadia Code", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.saludo.Location = new System.Drawing.Point(164, 216);
            this.saludo.MinimumSize = new System.Drawing.Size(100, 18);
            this.saludo.Name = "saludo";
            this.saludo.Size = new System.Drawing.Size(100, 18);
            this.saludo.TabIndex = 4;
            // 
            // panel2
            // 
            this.panel2.BackColor = System.Drawing.Color.LightBlue;
            this.panel2.Controls.Add(this.year2);
            this.panel2.Controls.Add(this.label6);
            this.panel2.Controls.Add(this.result);
            this.panel2.Controls.Add(this.year1);
            this.panel2.Controls.Add(this.diferencia);
            this.panel2.Controls.Add(this.label4);
            this.panel2.Controls.Add(this.label5);
            this.panel2.Location = new System.Drawing.Point(500, 12);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(437, 301);
            this.panel2.TabIndex = 5;
            // 
            // result
            // 
            this.result.AutoSize = true;
            this.result.BackColor = System.Drawing.Color.LightSalmon;
            this.result.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.result.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.result.Font = new System.Drawing.Font("Cascadia Code", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.result.Location = new System.Drawing.Point(168, 239);
            this.result.MinimumSize = new System.Drawing.Size(100, 18);
            this.result.Name = "result";
            this.result.Size = new System.Drawing.Size(100, 18);
            this.result.TabIndex = 4;
            // 
            // year1
            // 
            this.year1.Location = new System.Drawing.Point(144, 86);
            this.year1.Name = "year1";
            this.year1.Size = new System.Drawing.Size(146, 20);
            this.year1.TabIndex = 3;
            // 
            // diferencia
            // 
            this.diferencia.AutoSize = true;
            this.diferencia.Font = new System.Drawing.Font("Cascadia Code", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.diferencia.Location = new System.Drawing.Point(153, 192);
            this.diferencia.Name = "diferencia";
            this.diferencia.Size = new System.Drawing.Size(131, 25);
            this.diferencia.TabIndex = 2;
            this.diferencia.Text = "Calcular diferencia";
            this.diferencia.UseVisualStyleBackColor = true;
            this.diferencia.Click += new System.EventHandler(this.diferencia_Click);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Cascadia Code", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.Location = new System.Drawing.Point(166, 68);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(37, 15);
            this.label4.TabIndex = 1;
            this.label4.Text = "Año 1";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Font = new System.Drawing.Font("Cascadia Code", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label5.Location = new System.Drawing.Point(138, 19);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(168, 32);
            this.label5.TabIndex = 0;
            this.label5.Text = "Ejercicio 2";
            // 
            // year2
            // 
            this.year2.Location = new System.Drawing.Point(145, 149);
            this.year2.Name = "year2";
            this.year2.Size = new System.Drawing.Size(146, 20);
            this.year2.TabIndex = 6;
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Font = new System.Drawing.Font("Cascadia Code", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label6.Location = new System.Drawing.Point(167, 131);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(37, 15);
            this.label6.TabIndex = 5;
            this.label6.Text = "Año 2";
            // 
            // panel3
            // 
            this.panel3.BackColor = System.Drawing.Color.LightBlue;
            this.panel3.Controls.Add(this.blueBtn);
            this.panel3.Controls.Add(this.greenBtn);
            this.panel3.Controls.Add(this.output);
            this.panel3.Controls.Add(this.redBtn);
            this.panel3.Controls.Add(this.label9);
            this.panel3.Location = new System.Drawing.Point(41, 374);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(437, 301);
            this.panel3.TabIndex = 7;
            // 
            // output
            // 
            this.output.AutoSize = true;
            this.output.BackColor = System.Drawing.Color.LightSalmon;
            this.output.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.output.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.output.Font = new System.Drawing.Font("Cascadia Code", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.output.Location = new System.Drawing.Point(160, 213);
            this.output.MinimumSize = new System.Drawing.Size(100, 18);
            this.output.Name = "output";
            this.output.Size = new System.Drawing.Size(100, 18);
            this.output.TabIndex = 4;
            // 
            // redBtn
            // 
            this.redBtn.AutoSize = true;
            this.redBtn.BackColor = System.Drawing.Color.Red;
            this.redBtn.Font = new System.Drawing.Font("Cascadia Code", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.redBtn.Location = new System.Drawing.Point(145, 67);
            this.redBtn.Name = "redBtn";
            this.redBtn.Size = new System.Drawing.Size(131, 25);
            this.redBtn.TabIndex = 2;
            this.redBtn.Text = " ";
            this.redBtn.UseVisualStyleBackColor = false;
            this.redBtn.Click += new System.EventHandler(this.redBtn_Click);
            // 
            // label9
            // 
            this.label9.AutoSize = true;
            this.label9.Font = new System.Drawing.Font("Cascadia Code", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label9.Location = new System.Drawing.Point(126, 20);
            this.label9.Name = "label9";
            this.label9.Size = new System.Drawing.Size(168, 32);
            this.label9.TabIndex = 0;
            this.label9.Text = "Ejercicio 3";
            // 
            // greenBtn
            // 
            this.greenBtn.AutoSize = true;
            this.greenBtn.BackColor = System.Drawing.Color.Green;
            this.greenBtn.Font = new System.Drawing.Font("Cascadia Code", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.greenBtn.Location = new System.Drawing.Point(145, 98);
            this.greenBtn.Name = "greenBtn";
            this.greenBtn.Size = new System.Drawing.Size(131, 25);
            this.greenBtn.TabIndex = 5;
            this.greenBtn.Text = " ";
            this.greenBtn.UseVisualStyleBackColor = false;
            this.greenBtn.Click += new System.EventHandler(this.greenBtn_Click);
            // 
            // blueBtn
            // 
            this.blueBtn.AutoSize = true;
            this.blueBtn.BackColor = System.Drawing.Color.Blue;
            this.blueBtn.Font = new System.Drawing.Font("Cascadia Code", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.blueBtn.Location = new System.Drawing.Point(145, 129);
            this.blueBtn.Name = "blueBtn";
            this.blueBtn.Size = new System.Drawing.Size(131, 25);
            this.blueBtn.TabIndex = 6;
            this.blueBtn.Text = " ";
            this.blueBtn.UseVisualStyleBackColor = false;
            this.blueBtn.Click += new System.EventHandler(this.blueBtn_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.LightCyan;
            this.ClientSize = new System.Drawing.Size(967, 688);
            this.Controls.Add(this.panel3);
            this.Controls.Add(this.panel2);
            this.Controls.Add(this.panel1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.panel2.ResumeLayout(false);
            this.panel2.PerformLayout();
            this.panel3.ResumeLayout(false);
            this.panel3.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label saludo;
        private System.Windows.Forms.TextBox nombre;
        private System.Windows.Forms.Button btn1;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.Label result;
        private System.Windows.Forms.TextBox year1;
        private System.Windows.Forms.Button diferencia;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.TextBox year2;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Panel panel3;
        private System.Windows.Forms.Label output;
        private System.Windows.Forms.Button redBtn;
        private System.Windows.Forms.Label label9;
        private System.Windows.Forms.Button blueBtn;
        private System.Windows.Forms.Button greenBtn;
    }
}

