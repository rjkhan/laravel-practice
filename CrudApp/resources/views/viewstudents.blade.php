<!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <title>View Student | Student List</title>
        <!-- Styles etc. -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1>Here's a list of available Students</h1>
               @if (count($allstudents) > 0)
                
                    <table align="center">
                    <thead>
                        <td>First Name</td>
                        <td>Last Name</td>

                    </thead>
                    <tbody>
                        @foreach ($allstudents as $student)
                            <tr>
                                <td>{{ $student->first_name }}</td>
                                <td class="inner-table">{{ $student->last_name }}</td>
                              <td>
                              {{ Form::open(array('action'=>array('StudentController@destroy',$student->id),'method'=>"delete")) }}
                                {{ Form::submit('Delete') }}
                              {{ Form::close() }}  
                          </td>
    
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                @else
                    <p>no Record</p>

                @endif
                
                
            </div>
            <a href="{{ config('app.url')}}:8000/students/create">create a new</a>
        </div>
    </body>
    </html>