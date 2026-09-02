<div>
    <h1>Add New User</h1>

    <form action="add-user" method="post">
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
