# php
![image](https://github.com/user-attachments/assets/0d97fa6f-e38e-42a9-a358-47197f470880)
Claro, te explico brevemente cómo funciona este código paso a paso:

---

### 🔧 ¿Qué hace este código?

Es una página web que:

1. Muestra un **formulario** para agregar personas (nombre, apellido y edad).
2. Al enviar el formulario, guarda los datos en una **base de datos MySQL**.
3. Muestra una **tabla con todas las personas** guardadas en la base de datos.

---

### 🛠️ ¿Cómo está hecho?

#### 1. **Frontend (HTML + Bootstrap):**

* Usa **Bootstrap** para estilos.
* Tiene un formulario con campos de texto para **nombre**, **apellido** y **edad**.
* Hay una tabla que se llena con los datos desde la base de datos.

#### 2. **Backend (PHP + MySQL):**

* Se conecta a una base de datos llamada `escuela`.
* Si el formulario se envía (`POST`), se inserta una nueva persona en la tabla `persona`.
* Luego consulta y muestra todos los registros de la tabla `persona`.

---

### 🔄 Proceso resumido para hacerlo:

1. **Crea la base de datos** en MySQL:

   ```sql
   CREATE DATABASE escuela;

   USE escuela;

   CREATE TABLE persona (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nombre VARCHAR(100),
       apellido VARCHAR(100),
       edad INT
   );
   ```

2. **Guarda el archivo HTML/PHP** con el código que me diste, por ejemplo como `index.php`.

3. **Ejecuta en un servidor local**, como XAMPP o WAMP, y accede desde el navegador (por ejemplo: `http://localhost/index.php`).

4. **Prueba el formulario**, agrega personas y se verán en la tabla.

---

### ✅ ¿Qué necesitas para que funcione?

* Tener un **servidor local** (XAMPP, WAMP, etc.).
* Tener **MySQL** y **PHP** activos.
* Crear la base de datos y tabla como se explicó arriba.

---


