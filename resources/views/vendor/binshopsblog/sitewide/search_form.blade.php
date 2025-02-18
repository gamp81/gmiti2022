<div style='max-width:500px;margin:50px auto;' class='search-form-outer'>
    <form method='get' action='{{route("binshopsblog.search", app('request')->get('locale'))}}' class='text-center'>
        <h4>Busca algo en nuestro blog:</h4>
        <input type='text' name='s' placeholder='Buscar...' class='form-control' value='{{\Request::get("s")}}'>
        <input type='submit' value='Search' class='mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded'>
    </form>
</div>