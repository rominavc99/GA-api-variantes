<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create variant</title>
</head>
<body>
    <h1>New Variant</h1>

    <form method="POST" action="{{route('variantes.store')}}" enctype="multipart/form-data">
    @csrf

        <div>
            <label>Lineage</label>
            <input type="text" name="lineage" id="lineage">    
        </div>

        <div>
            <label>Common countries</label>
            <textarea rows="5" type="text" name="common_countries" id="common_countries"> </textarea>
        </div>

        <div>
            <label>Earliet Date</label>
            <input type="text" name="earliest_date" id="earliest_date">
        </div>

        <div>
            <label>Designated Number</label>
            <input type="text" name="designed_number" id="designed_number">
        </div>

        <div>
            <label>Assigned Number</label>
            <input type="text" name="assigned_number" id="assigned_number">
        </div>

        <div>
            <label>Description</label>
            <textarea rows="5" type="text" name="description" id="description"> </textarea>
        </div>

        <div>
            <label>WHO Name</label>
            <input type="text" name="who_name" id="who_name">
        </div>

        <div>
            <label>Evidence</label>
            <input type="file" name="evidence" id="evidence">
        </div>

        <div>
            <button type="submit">Create</button>
        </div>

    </form>

</body>
</html>