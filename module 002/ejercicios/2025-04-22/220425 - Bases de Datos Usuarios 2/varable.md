🧭 Paso 1: Verifica la ruta de MySQL en XAMPP

Primero, identifica dónde está instalado MySQL dentro de XAMPP. Generalmente, si usas XAMPP, MySQL suele estar aquí:

```bash
/Applications/XAMPP/xamppfiles/bin
```

Puedes comprobar que el ejecutable está ahí con:

```bash
ls /Applications/XAMPP/xamppfiles/bin/mysql
```

⚙️ Paso 2: Edita tu archivo de configuración del shell

Dependiendo de cuál shell estés usando (Bash o Zsh), edita el archivo correspondiente:

Si usas Zsh (predeterminado en macOS desde Catalina):

```bash
nano ~/.zshrc
```

Si usas Bash:

```bash
nano ~/.bash_profile
```

🛠️ Paso 3: Agrega la ruta al PATH

Agrega esta línea al final del archivo:

```bash
export PATH="/Applications/XAMPP/xamppfiles/bin:$PATH"
```

Esto asegura que tu terminal pueda encontrar los ejecutables de MySQL desde cualquier directorio.

💾 Paso 4: Guarda y recarga

Después de editar el archivo:

Guarda (en nano, presiona Control + O, luego Enter, y Control + X para salir).

Recarga la configuración con:

```bash
source ~/.zshrc    # o source ~/.bash_profile según el archivo que hayas editado
```

✅ Paso 5: Verifica

Ahora prueba si puedes acceder a MySQL directamente:

```bash
mysql --version
```

Y también puedes iniciar sesión con:

```bash
mysql -u root -p
```

(El password por defecto de root en XAMPP normalmente está en blanco, a menos que lo hayas cambiado).

¿Quieres que también te muestre cómo crear alias o hacer que se inicie MySQL automáticamente al arrancar?
