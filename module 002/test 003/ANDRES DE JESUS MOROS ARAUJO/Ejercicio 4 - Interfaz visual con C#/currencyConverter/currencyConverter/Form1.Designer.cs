namespace currencyConverter
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
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.cant_euros = new System.Windows.Forms.TextBox();
            this.output = new System.Windows.Forms.TextBox();
            this.label4 = new System.Windows.Forms.Label();
            this.divisas = new System.Windows.Forms.GroupBox();
            this.dolar = new System.Windows.Forms.RadioButton();
            this.libra = new System.Windows.Forms.RadioButton();
            this.yen = new System.Windows.Forms.RadioButton();
            this.yuan = new System.Windows.Forms.RadioButton();
            this.btn = new System.Windows.Forms.Button();
            this.divisas.SuspendLayout();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.SystemColors.HotTrack;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 32F);
            this.label1.ForeColor = System.Drawing.Color.White;
            this.label1.Location = new System.Drawing.Point(207, 41);
            this.label1.Name = "label1";
            this.label1.Padding = new System.Windows.Forms.Padding(6);
            this.label1.Size = new System.Drawing.Size(407, 114);
            this.label1.TabIndex = 0;
            this.label1.Text = "Convierte tus euros\r\na cualquier divisa";
            this.label1.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.BackColor = System.Drawing.SystemColors.HotTrack;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 24F);
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(83, 182);
            this.label2.Name = "label2";
            this.label2.Padding = new System.Windows.Forms.Padding(6);
            this.label2.Size = new System.Drawing.Size(284, 86);
            this.label2.TabIndex = 1;
            this.label2.Text = "Introduce una \r\ncantidad en euros";
            this.label2.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.BackColor = System.Drawing.SystemColors.HotTrack;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 24F);
            this.label3.ForeColor = System.Drawing.Color.White;
            this.label3.Location = new System.Drawing.Point(507, 182);
            this.label3.Name = "label3";
            this.label3.Padding = new System.Windows.Forms.Padding(6);
            this.label3.Size = new System.Drawing.Size(241, 86);
            this.label3.TabIndex = 2;
            this.label3.Text = "Selecciona la \r\ndivisa deseada";
            this.label3.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // cant_euros
            // 
            this.cant_euros.CausesValidation = false;
            this.cant_euros.Font = new System.Drawing.Font("Microsoft Sans Serif", 20.25F);
            this.cant_euros.ForeColor = System.Drawing.SystemColors.AppWorkspace;
            this.cant_euros.HideSelection = false;
            this.cant_euros.Location = new System.Drawing.Point(23, 289);
            this.cant_euros.Name = "cant_euros";
            this.cant_euros.Size = new System.Drawing.Size(399, 38);
            this.cant_euros.TabIndex = 3;
            this.cant_euros.Text = "Cantidad (€)";
            this.cant_euros.Click += new System.EventHandler(this.cant_euros_Click);
            // 
            // output
            // 
            this.output.CausesValidation = false;
            this.output.Font = new System.Drawing.Font("Microsoft Sans Serif", 20.25F);
            this.output.ForeColor = System.Drawing.SystemColors.ActiveCaptionText;
            this.output.HideSelection = false;
            this.output.Location = new System.Drawing.Point(198, 554);
            this.output.Name = "output";
            this.output.ReadOnly = true;
            this.output.Size = new System.Drawing.Size(421, 38);
            this.output.TabIndex = 4;
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.BackColor = System.Drawing.SystemColors.HotTrack;
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 24F);
            this.label4.ForeColor = System.Drawing.Color.White;
            this.label4.Location = new System.Drawing.Point(251, 485);
            this.label4.Name = "label4";
            this.label4.Padding = new System.Windows.Forms.Padding(6);
            this.label4.Size = new System.Drawing.Size(314, 49);
            this.label4.TabIndex = 5;
            this.label4.Text = "Cantidad convertida";
            this.label4.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // divisas
            // 
            this.divisas.Controls.Add(this.yuan);
            this.divisas.Controls.Add(this.yen);
            this.divisas.Controls.Add(this.libra);
            this.divisas.Controls.Add(this.dolar);
            this.divisas.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.25F);
            this.divisas.Location = new System.Drawing.Point(488, 289);
            this.divisas.Name = "divisas";
            this.divisas.Size = new System.Drawing.Size(296, 110);
            this.divisas.TabIndex = 6;
            this.divisas.TabStop = false;
            this.divisas.Text = "Monedas";
            // 
            // dolar
            // 
            this.dolar.AutoSize = true;
            this.dolar.Checked = true;
            this.dolar.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.25F);
            this.dolar.Location = new System.Drawing.Point(21, 35);
            this.dolar.Name = "dolar";
            this.dolar.Size = new System.Drawing.Size(112, 24);
            this.dolar.TabIndex = 0;
            this.dolar.TabStop = true;
            this.dolar.Text = "Dólares ($)";
            this.dolar.UseVisualStyleBackColor = true;
            // 
            // libra
            // 
            this.libra.AutoSize = true;
            this.libra.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.25F);
            this.libra.Location = new System.Drawing.Point(21, 67);
            this.libra.Name = "libra";
            this.libra.Size = new System.Drawing.Size(162, 24);
            this.libra.TabIndex = 1;
            this.libra.Text = "Libra Esterlina (£)";
            this.libra.UseVisualStyleBackColor = true;
            // 
            // yen
            // 
            this.yen.AutoSize = true;
            this.yen.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.25F);
            this.yen.Location = new System.Drawing.Point(183, 35);
            this.yen.Name = "yen";
            this.yen.Size = new System.Drawing.Size(81, 24);
            this.yen.TabIndex = 2;
            this.yen.Text = "Yen (¥)";
            this.yen.UseVisualStyleBackColor = true;
            // 
            // yuan
            // 
            this.yuan.AutoSize = true;
            this.yuan.Font = new System.Drawing.Font("Microsoft Sans Serif", 12.25F);
            this.yuan.Location = new System.Drawing.Point(183, 67);
            this.yuan.Name = "yuan";
            this.yuan.Size = new System.Drawing.Size(90, 24);
            this.yuan.TabIndex = 3;
            this.yuan.Text = "Yuan (¥)";
            this.yuan.UseVisualStyleBackColor = true;
            // 
            // btn
            // 
            this.btn.AutoSize = true;
            this.btn.BackColor = System.Drawing.Color.IndianRed;
            this.btn.Font = new System.Drawing.Font("Microsoft Sans Serif", 22.25F);
            this.btn.ForeColor = System.Drawing.Color.White;
            this.btn.Location = new System.Drawing.Point(342, 418);
            this.btn.Name = "btn";
            this.btn.Size = new System.Drawing.Size(146, 46);
            this.btn.TabIndex = 7;
            this.btn.Text = "Convertir";
            this.btn.UseVisualStyleBackColor = false;
            this.btn.Click += new System.EventHandler(this.btn_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.AutoSizeMode = System.Windows.Forms.AutoSizeMode.GrowAndShrink;
            this.BackColor = System.Drawing.SystemColors.ActiveCaption;
            this.ClientSize = new System.Drawing.Size(815, 625);
            this.Controls.Add(this.btn);
            this.Controls.Add(this.divisas);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.output);
            this.Controls.Add(this.cant_euros);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "Form1";
            this.Text = "Convertidor de divisas";
            this.divisas.ResumeLayout(false);
            this.divisas.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.TextBox cant_euros;
        private System.Windows.Forms.TextBox output;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.GroupBox divisas;
        private System.Windows.Forms.RadioButton yuan;
        private System.Windows.Forms.RadioButton yen;
        private System.Windows.Forms.RadioButton libra;
        private System.Windows.Forms.RadioButton dolar;
        private System.Windows.Forms.Button btn;
    }
}

