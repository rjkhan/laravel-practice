<!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
      <title>Create Product | Product Store</title>
      <!-- styling etc. -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form method="POST" action="{{ config('app.url')}}:8000/students">
                    @csrf
                    <h1> Enter Details to create a product</h1>
                    <div class="form-input">
                        <label>Name</label> <input type="text" name="first_name">
                    </div>

                    <div class="form-input">
                        <label>last_name</label> <input type="text" name="last_name">
                    </div>



                    <button type="submit">Submit</button>
                    <a href="{{config('app.url')}}:8000/students">View student</a>
                </form>
                 
            </div>
        </div>
    </body>
    </html>