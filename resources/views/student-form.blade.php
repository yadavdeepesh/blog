<div>

<form action="add-student-user" method="post">
    @csrf
    <div class="input-wrapper">
            <input type="text" placeholder="Enter the name" name="username" />
        </div>
        
          <div class="input-wrapper">
            <input type="text" placeholder="Enter the email" name="email" />
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter the city" name="city" />
        </div>
    <h5>User Skills</h5>
    <label for="php">PHP</label>
    <input type="checkbox" name="skill[]" id="php" value="php" >

    <label for="java">JAVA</label>
    <input type="checkbox" name="skill[]" id="java" value="java" >

     <label for="python">Python</label>
    <input type="checkbox" name="skill[]" id="python" value="python" >


    <h5>Gender</h5>
    <label for="male">Male</label>
    <input type="radio" name="gender" id="male" value="male">

    <label for="female">Female</label>
    <input type="radio" name="gender" id="female" value="female">

    <h5>City</h5>
    <select name="city" id="city">
        <option value="Delhi">Delhi</option>
        <option value="Noida">Nodia</option>
        <option value="Gurgaon">Gurgaon</option>
    </select>

    <h5>Age</h5>
    <input type="range" name="age" min="18" max="100" >

     <button>Add New User</button>


</form>
</div>