
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <div class="registration">
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div>
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname" required>
                </div>

                <div>
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" required>
                </div>

                <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                </div>

                <div>
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone">
                </div>

                <div>
                <label for="website">Website:</label>
                <input type="url" id="website" name="website">
                </div>

                <div>
                <label for="remarks">Remarks:</label>
                <textarea id="remarks" name="remarks"></textarea>
                </div>

                <div>
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
                </div>

                <div>
                <label for="category">Category:</label>
                <select name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                </div>

                <div>
                <label for="location">Location:</label>
                <select name="location_id">
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
                </div>

                <div>
                <label for="streetnr">Street:</label>
                <input type="text" id="streetnr" name="streetnr" required>
                </div>

                <div>
                <label for="codecity">Postcode:</label>
                <input type="text" id="codecity" name="codecity" required>
                </div>

                <button type="submit">Register</button>
            </form>
        </div>
    </body>
</html>