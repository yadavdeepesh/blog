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
            <input type="text" placeholder="Enter the name" name="username" value="{{ old('username') }}" class="{{ $errors->has('username') ? 'is-invalid' : '' }}" />
            <span style="color: red;">@error('username') {{ $message }} @enderror</span>
        </div>
        
          <div class="input-wrapper">
            <input type="text" placeholder="Enter the email" name="email" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" />
            <span style="color: red;">@error('email') {{ $message }} @enderror</span>   
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter the city" name="city" value="{{ old('city') }}"  class="{{ $errors->has('city') ? 'is-invalid' : '' }}" />
            <span style="color: red;">@error('city') {{ $message }} @enderror</span>
        </div>
        <div class="input-wrapper">
             <h5>User Skills</h5>
                <label for="php">PHP</label>
                <input type="checkbox" name="skill" id="php" value="php"  value="{{ old('skill') }}" >

                <label for="java">JAVA</label>
                <input type="checkbox" name="skill" id="java" value="java" value="{{ old('skill') }}" >

                <label for="python">Python</label>
                <input type="checkbox" name="skill" id="python" value="python" value="{{ old('skill') }}" >
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
    .is-invalid{
        border: 1px solid red;
    }

</style>
