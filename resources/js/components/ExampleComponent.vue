<template>
  <div class="container">

    <div class="card text-black bg-light mb-3 text-center">
        
      <div class="card-body">
        <h5 class="card-title">Bienvenido a BCP</h5>
        <p
          class="card-text"
        >Te invitamos a registrarte. Si ya tienes una cuenta, te invitamos a iniciar sesión</p>
     
      
        <div class="card text-white bg-secondary mb-3">
          <div class="card-body">
            <p
              class="card-text"
            >Al acceder al sistema, podras tomar control de tu perfil, como editar tus datos, o cambiar tu imagen de perfil.</p>
            <a href="login" class="btn btn-warning btn-lg">Acceder</a>
          </div>
          <div class="card-body">
            <p
              class="card-text"
            >Al registrarte, podras acceder a las dinstintas ventajas que te otorga el formar parte de nuestra aplicacion web</p>
            <a href="register" class="btn btn-warning btn-lg">Registrarse</a>
          </div>


        </div>

        <div class="card text-white bg-secondary mb-1">
          <div class="card-body">
            <p> Creado por
              Luis Becerra, Marialejadra Castelli y Diego Pérez

            </p>
          </div>

          
        </div>
     
      </div>
      



    </div> 
    
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
