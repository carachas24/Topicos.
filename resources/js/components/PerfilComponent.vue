<template>
  <div>
    
          

    <div class="card-body">
      <h4>Bienvenido Usuario</h4>
      

      <div v-for="(item, index) in users" :key="index" class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush bg-dark">
          <li class="list-group-item">Usuario: {{item.name}} {{item.lastname}}</li>
          <li class="list-group-item">Telefono: {{item.telefono}}</li>
          <li class="list-group-item">Cedula: {{item.cedula}}</li>
          <li class="list-group-item">Email: {{item.email}}</li>

        </ul>

      

        <button class="btn btn-primary btn-lg" @click="editarFormulario(item)">Editar</button>

      </div>
      
      <form @submit.prevent="editarPerfil(user)" v-if="modoEditar">
        
        <h3>Editar usuario</h3>

        <ValidationProvider name="name" rules="required">
          <div slot-scope="{ errors }">
            <input
              type="text"
              class="form-control mb-2"
              placeholder="Nombre del usuario"
              v-model="user.name"
            />
            <p>{{ errors[0] }}</p>
          </div>
        </ValidationProvider>

        <ValidationProvider name="lastname" rules="required">
          <div slot-scope="{ errors }">
            <input
              type="text"
              class="form-control mb-2"
              placeholder="Apellido del usuario"
              v-model="user.lastname"
            />
            <p>{{ errors[0] }}</p>
          </div>
        </ValidationProvider>

        <ValidationProvider name="cedula" rules="required|numeric">
          <div slot-scope="{ errors }">
            <input
              type="text"
              class="form-control mb-2"
              placeholder="Cedula del usuario"
              v-model="user.cedula"
            />
            <p>{{ errors[0] }}</p>
          </div>
        </ValidationProvider>

        <ValidationProvider name="telefono" rules="required|numeric">
          <div slot-scope="{ errors }">
            <input
              type="text"
              class="form-control mb-2"
              placeholder="Telefono del usuario"
              v-model="user.telefono"
            />
            <p>{{ errors[0] }}</p>
          </div>
        </ValidationProvider>

        <ValidationProvider name="email" rules="required|email">
          <div slot-scope="{ errors }">
            <input
              type="text"
              class="form-control mb-2"
              placeholder="Email del usuario"
              v-model="user.email"
            />
            <p>{{ errors[0] }}</p>
          </div>
        </ValidationProvider>

        <button class="btn btn-primary btn-lg" type="submit" @click="submit">Editar</button>
        <button class="btn btn-primary btn-lg" type="submit" @click="cancelarEdicion">Cancelar</button>
        
      </form>
    </div>
    </div>   
</template>




<script>

import { ValidationProvider } from "vee-validate";

export default {
  data() {
    return {
      users: [],
      modoEditar: false,
      user: { name: "", lastname: "", cedula: "", telefono: "", email: "", avatar: "" }
    };
  },
  created() {
    axios.get("/perfil").then(res => {
      this.users = res.data;
      
    });
  },
  

  components: {
    ValidationProvider
  },

  methods: {
    editarFormulario(item) {
      this.user.name = item.name;
      this.user.lastname = item.lastname;
      this.user.cedula = item.cedula;
      this.user.telefono = item.telefono;
      this.user.email = item.email;
      this.user.avatar = item.avatar;
      this.user.id = item.id;
      this.modoEditar = true;
    },
    editarPerfil(user) {
      const params = {
        name: user.name,
        lastname: user.lastname,
        cedula: user.cedula,
        telefono: user.telefono,
        email: user.email,
        avatar: user.avatar
      };
      axios.put(`/perfil/${user.id}`, params).then(res => {
        this.modoEditar = false;
        const index = this.users.findIndex(item => item.id === user.id);
        this.users[index] = res.data;
      });
    },
    cancelarEdicion() {
      this.modoEditar = false;
      this.user = {
        name: "",
        lastname: "",
        cedula: "",
        telefono: "",
        email: ""
      };
    },
    

    
  }
};
</script>