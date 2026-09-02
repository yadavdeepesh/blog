<div>
    <h1>Add New User</h1>
<!-- {{print_r($errors)}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
    <form action="add-user" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter the name" name="username" />
            <span style="color: red;">@error('username') {{ $message }} @enderror</span>
        </div>
        
          <div class="input-wrapper">
            <input type="text" placeholder="Enter the email" name="email" />
            <span style="color: red;">@error('email') {{ $message }} @enderror</span>   
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter the city" name="city" />
            <span style="color: red;">@error('city') {{ $message }} @enderror</span>
        </div>
        <div class="input-wrapper">
             <h5>User Skills</h5>
                <label for="php">PHP</label>
                <input type="checkbox" name="skill" id="php" value="php" >

                <label for="java">JAVA</label>
                <input type="checkbox" name="skill" id="java" value="java" >

                <label for="python">Python</label>
                <input type="checkbox" name="skill" id="python" value="python" >
                <span style="color: red;">@error('skill') {{ $message }} @enderror</span>
        </div>
        
          <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
</div>
<style>
    input{
        width: 200px;
        height:40px;
    }
    .input-wrapper{
        margin:5px;
    }

</style>
