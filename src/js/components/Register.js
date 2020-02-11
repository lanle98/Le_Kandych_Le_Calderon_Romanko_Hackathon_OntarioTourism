

export default {
  template: `

  <div class="register p-5">

    <h2 class="text-center">JOIN OUR EMAIL LIST</h2>

    <div v-if="isSubmitted">
      <h3>Hello {{user_data.fname}}</h3>
      <p>Your subscribe date is {{user_data.subscribe_date}}</p>
      <p>Your last log-in date is {{user_data.last_update_date}}</p>
    </div>

    <form class="container my-5 mx-auto row p-5 m-0 justify-content-between" action="../../admin/sign-up.php" method="POST">
        
        <div class="col-md-12 mb-3">
          <label for="Name">Name</label>
          <div class="row justify-content-between">
            <input v-model='first_name' class="m-2 p-2" type="text" placeholder="Your First Name" name="fname" />
            <input v-model='last_name' class="m-2 p-2" type="text" placeholder="Your Last Name" name="lname" />
          </div>
        </div>
  

        <div class="col-md-6 d-flex flex-column mb-3">
            <label for="Email">Email</label>
            <input v-model='email' class="p-2" type="email" placeholder="Your Email Address" name="email" />
        </div>

        <div class="col-md-6 d-flex flex-column mb-3">
          <label for="Country">Country</label>
          <select v-model='country' class="p-2" id="country" name="country" required>
              <option value="" disabled selected>Your Country</option>
              <option value="Afganistan">Afghanistan</option>
             
          </select>
        </div>
      
        <input @click.prevent="submitUserData" class="submit my-3 col-md-4 py-3 mx-auto btn" name="submit" value="Sign Up" type="submit" />
        <p class="col-12 text-center">{{message}}</p>
        
    </form>
    
  </div>
  </div>
    `,



  data() {
    return {
      first_name: '',
      last_name: '',
      email: '',
      country: '',
      isSubmitted: false,
      message: '',
      user_data: ""

    };
  },

  methods: {
    submitUserData() {
      console.log(this.email)
      let formData = new FormData();

      formData.append("fname", this.first_name);
      formData.append("lname", this.last_name);
      formData.append("email", this.email);
      formData.append("country", this.country);

      this.first_name = ''
      this.last_name = '',
        this.email = '',
        this.country = ''




      let url = `../../admin/sign-up.php`;
      fetch(url, {
        method: "POST",
        body: formData
      })
        .then(res => res.json())
        .then(data => {
          console.log(data)

          if (data == "error") {
            this.message = "Please fill in the required field"
          } else {
            this.message = "Hello there"
            this.isSubmitted = true;
            this.user_data = data
          }
        })
        .catch(err => console.log(err))



    },









  }
}
