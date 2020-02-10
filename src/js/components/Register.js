export default {
  template: `
  <div class="register">
    <form action="../../admin/sign-up.php">
        <input type="text" placeholder="First Name" name="fname" />
        <input type="text" placeholder="Last Name" name="lname" />
        <input type="email" placeholder="Email" name="email" />
        <select name="country">
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Audi</option>
        </select>
        <input type="submit" />
    </form>
  </div>
    `
};
