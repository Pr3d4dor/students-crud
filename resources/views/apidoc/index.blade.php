<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="/docs/css/style.css" />
    <script src="/docs/js/all.js"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript","php","python"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                                  <a href="#" data-language-name="php">php</a>
                                  <a href="#" data-language-name="python">python</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc", ["format" => ".json"]) }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>student</h1>
<!-- START_61c992b9faa3bff9c756e4bdf4f2b6a1 -->
<h2>List students</h2>
<p>[List all the stored students in the database]</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/students" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/students"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/students',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/students'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": null,
            "name": "Prof. Hans VonRueden",
            "birthdate": "16\/04\/2019",
            "grade": 2,
            "postcode": "85015310",
            "street": "27654 Michale Light Apt. 735",
            "number": 1892,
            "complement": "animi",
            "neighborhood": "dignissimos",
            "city": "quaerat",
            "state": "PR",
            "mother_name": "Frank Glover",
            "mother_cpf": "08846355970",
            "preferred_day_for_monthly_payment": "5"
        },
        {
            "id": null,
            "name": "Colleen Mueller",
            "birthdate": "06\/03\/2012",
            "grade": 9,
            "postcode": "85015310",
            "street": "3079 Ryan Union Suite 603",
            "number": 1725,
            "complement": "cum",
            "neighborhood": "quos",
            "city": "quod",
            "state": "PR",
            "mother_name": "Berniece Streich",
            "mother_cpf": "08846355970",
            "preferred_day_for_monthly_payment": "5"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/students</code></p>
<!-- END_61c992b9faa3bff9c756e4bdf4f2b6a1 -->
<!-- START_058e6d0cac82649086bbc06fe88fd040 -->
<h2>Create a student</h2>
<p>[Store a new student in the database]</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/students" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Max Silva","birthdate":"26\/08\/1996","grade":5,"postcode":"85015310","street":"Rua Dom \u00c1lvaro Nunes C. de Vaca","number":286,"complement":"Casa","neighborhood":"Batel","city":"Guarapuava","state":"PR","mother_name":"Marlene Campos Bine","mother_cpf":"41029950997","preferred_day_for_monthly_payment":"5"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/students"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Max Silva",
    "birthdate": "26\/08\/1996",
    "grade": 5,
    "postcode": "85015310",
    "street": "Rua Dom \u00c1lvaro Nunes C. de Vaca",
    "number": 286,
    "complement": "Casa",
    "neighborhood": "Batel",
    "city": "Guarapuava",
    "state": "PR",
    "mother_name": "Marlene Campos Bine",
    "mother_cpf": "41029950997",
    "preferred_day_for_monthly_payment": "5"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/students',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Max Silva',
            'birthdate' =&gt; '26/08/1996',
            'grade' =&gt; 5,
            'postcode' =&gt; '85015310',
            'street' =&gt; 'Rua Dom Álvaro Nunes C. de Vaca',
            'number' =&gt; 286,
            'complement' =&gt; 'Casa',
            'neighborhood' =&gt; 'Batel',
            'city' =&gt; 'Guarapuava',
            'state' =&gt; 'PR',
            'mother_name' =&gt; 'Marlene Campos Bine',
            'mother_cpf' =&gt; '41029950997',
            'preferred_day_for_monthly_payment' =&gt; '5',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/students'
payload = {
    "name": "Max Silva",
    "birthdate": "26\/08\/1996",
    "grade": 5,
    "postcode": "85015310",
    "street": "Rua Dom \u00c1lvaro Nunes C. de Vaca",
    "number": 286,
    "complement": "Casa",
    "neighborhood": "Batel",
    "city": "Guarapuava",
    "state": "PR",
    "mother_name": "Marlene Campos Bine",
    "mother_cpf": "41029950997",
    "preferred_day_for_monthly_payment": "5"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": null,
        "name": "Guillermo Feest",
        "birthdate": "17\/08\/1994",
        "grade": 8,
        "postcode": "85015310",
        "street": "23166 Gilbert Meadows",
        "number": 1662,
        "complement": "cumque",
        "neighborhood": "asperiores",
        "city": "ipsum",
        "state": "PR",
        "mother_name": "Prof. Ed Kassulke DDS",
        "mother_cpf": "08846355970",
        "preferred_day_for_monthly_payment": "5"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/students</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>required</td>
<td>The name of the student (max: 100 characters).</td>
</tr>
<tr>
<td><code>birthdate</code></td>
<td>string</td>
<td>required</td>
<td>The birthdate of the student (format: dd/mm/yyyy).</td>
</tr>
<tr>
<td><code>grade</code></td>
<td>integer</td>
<td>required</td>
<td>The grade of the student (integer between 1-9).</td>
</tr>
<tr>
<td><code>postcode</code></td>
<td>string</td>
<td>required</td>
<td>The postcode of the student address (max: 8 characters), must be a valid one.</td>
</tr>
<tr>
<td><code>street</code></td>
<td>string</td>
<td>required</td>
<td>The street address of the student (max: 120 characters).</td>
</tr>
<tr>
<td><code>number</code></td>
<td>integer</td>
<td>required</td>
<td>The number of the student address.</td>
</tr>
<tr>
<td><code>complement</code></td>
<td>string</td>
<td>optional</td>
<td>The complement of the student address (max: 50 characters).</td>
</tr>
<tr>
<td><code>neighborhood</code></td>
<td>string</td>
<td>required</td>
<td>The neighborhood of the student address (max: 100 characters).</td>
</tr>
<tr>
<td><code>city</code></td>
<td>string</td>
<td>required</td>
<td>The city of the student address.</td>
</tr>
<tr>
<td><code>state</code></td>
<td>string</td>
<td>required</td>
<td>The state of the student address (must be a valid one and max: 2 characters).</td>
</tr>
<tr>
<td><code>mother_name</code></td>
<td>string</td>
<td>required</td>
<td>The name of the student mother.</td>
</tr>
<tr>
<td><code>mother_cpf</code></td>
<td>string</td>
<td>required</td>
<td>The name of the student mother.</td>
</tr>
<tr>
<td><code>preferred_day_for_monthly_payment</code></td>
<td>string</td>
<td>required</td>
<td>The preferred day for the monthly payment ( must be: 5, 10, 15, 20 or 25).</td>
</tr>
</tbody>
</table>
<!-- END_058e6d0cac82649086bbc06fe88fd040 -->
<!-- START_cd08c0217fcb17b3adba96eec6de5be5 -->
<h2>Show a student</h2>
<p>[Show a specific student by id from the database]</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/students/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/students/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/students/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/students/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": null,
            "name": "Mrs. Margaret Upton DVM",
            "birthdate": "22\/02\/2019",
            "grade": 7,
            "postcode": "85015310",
            "street": "13654 Priscilla Heights",
            "number": 1377,
            "complement": "illum",
            "neighborhood": "ea",
            "city": "consequatur",
            "state": "PR",
            "mother_name": "Ms. Theresia Batz",
            "mother_cpf": "08846355970",
            "preferred_day_for_monthly_payment": "5"
        },
        {
            "id": null,
            "name": "Tobin Jacobson DVM",
            "birthdate": "20\/03\/2000",
            "grade": 9,
            "postcode": "85015310",
            "street": "64604 Florine Plains Suite 677",
            "number": 1771,
            "complement": "sit",
            "neighborhood": "incidunt",
            "city": "commodi",
            "state": "PR",
            "mother_name": "Carley D'Amore",
            "mother_cpf": "08846355970",
            "preferred_day_for_monthly_payment": "5"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/students/{student}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>The ID of the student.</td>
</tr>
</tbody>
</table>
<!-- END_cd08c0217fcb17b3adba96eec6de5be5 -->
<!-- START_f4798a6166743436fe98df7c0a10ea60 -->
<h2>Update a student</h2>
<p>[Update a specific student by id in the database]</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/students/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Max Silva","birthdate":"26\/08\/1996","grade":5,"postcode":"85015310","street":"Rua Dom \u00c1lvaro Nunes C. de Vaca","number":286,"complement":"Casa","neighborhood":"Batel","city":"Guarapuava","state":"PR","mother_name":"Marlene Campos Bine","mother_cpf":"41029950997","preferred_day_for_monthly_payment":"5"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/students/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Max Silva",
    "birthdate": "26\/08\/1996",
    "grade": 5,
    "postcode": "85015310",
    "street": "Rua Dom \u00c1lvaro Nunes C. de Vaca",
    "number": 286,
    "complement": "Casa",
    "neighborhood": "Batel",
    "city": "Guarapuava",
    "state": "PR",
    "mother_name": "Marlene Campos Bine",
    "mother_cpf": "41029950997",
    "preferred_day_for_monthly_payment": "5"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/students/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Max Silva',
            'birthdate' =&gt; '26/08/1996',
            'grade' =&gt; 5,
            'postcode' =&gt; '85015310',
            'street' =&gt; 'Rua Dom Álvaro Nunes C. de Vaca',
            'number' =&gt; 286,
            'complement' =&gt; 'Casa',
            'neighborhood' =&gt; 'Batel',
            'city' =&gt; 'Guarapuava',
            'state' =&gt; 'PR',
            'mother_name' =&gt; 'Marlene Campos Bine',
            'mother_cpf' =&gt; '41029950997',
            'preferred_day_for_monthly_payment' =&gt; '5',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/students/1'
payload = {
    "name": "Max Silva",
    "birthdate": "26\/08\/1996",
    "grade": 5,
    "postcode": "85015310",
    "street": "Rua Dom \u00c1lvaro Nunes C. de Vaca",
    "number": 286,
    "complement": "Casa",
    "neighborhood": "Batel",
    "city": "Guarapuava",
    "state": "PR",
    "mother_name": "Marlene Campos Bine",
    "mother_cpf": "41029950997",
    "preferred_day_for_monthly_payment": "5"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": null,
        "name": "Dolly Connelly II",
        "birthdate": "24\/03\/2016",
        "grade": 6,
        "postcode": "85015310",
        "street": "241 Ulices Bypass Suite 426",
        "number": 1711,
        "complement": "consequuntur",
        "neighborhood": "dolor",
        "city": "magnam",
        "state": "PR",
        "mother_name": "Mr. Bud Ondricka II",
        "mother_cpf": "08846355970",
        "preferred_day_for_monthly_payment": "5"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/students/{student}</code></p>
<p><code>PATCH api/students/{student}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>The ID of the student.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>optional</td>
<td>The name of the student (max: 100 characters).</td>
</tr>
<tr>
<td><code>birthdate</code></td>
<td>string</td>
<td>optional</td>
<td>The birthdate of the student (format: dd/mm/yyyy).</td>
</tr>
<tr>
<td><code>grade</code></td>
<td>integer</td>
<td>optional</td>
<td>The grade of the student (integer between 1-9).</td>
</tr>
<tr>
<td><code>postcode</code></td>
<td>string</td>
<td>optional</td>
<td>The postcode of the student address (max: 8 characters), must be a valid one.</td>
</tr>
<tr>
<td><code>street</code></td>
<td>string</td>
<td>optional</td>
<td>The street address of the student (max: 120 characters).</td>
</tr>
<tr>
<td><code>number</code></td>
<td>integer</td>
<td>optional</td>
<td>The number of the student address.</td>
</tr>
<tr>
<td><code>complement</code></td>
<td>string</td>
<td>optional</td>
<td>The complement of the student address (max: 50 characters).</td>
</tr>
<tr>
<td><code>neighborhood</code></td>
<td>string</td>
<td>optional</td>
<td>The neighborhood of the student address (max: 100 characters).</td>
</tr>
<tr>
<td><code>city</code></td>
<td>string</td>
<td>optional</td>
<td>The city of the student address.</td>
</tr>
<tr>
<td><code>state</code></td>
<td>string</td>
<td>optional</td>
<td>The state of the student address (must be a valid one and max: 2 characters).</td>
</tr>
<tr>
<td><code>mother_name</code></td>
<td>string</td>
<td>optional</td>
<td>The name of the student mother.</td>
</tr>
<tr>
<td><code>mother_cpf</code></td>
<td>string</td>
<td>optional</td>
<td>The name of the student mother.</td>
</tr>
<tr>
<td><code>preferred_day_for_monthly_payment</code></td>
<td>string</td>
<td>optional</td>
<td>The preferred day for the monthly payment ( must be: 5, 10, 15, 20 or 25).</td>
</tr>
</tbody>
</table>
<!-- END_f4798a6166743436fe98df7c0a10ea60 -->
<!-- START_9b6130181f7a43c0b235a243cf8e7980 -->
<h2>Delete a student</h2>
<p>[Delete a specific student by id from the database]</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/students/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/students/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/students/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/students/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": null,
        "name": "Celia Bernier",
        "birthdate": "13\/06\/1989",
        "grade": 3,
        "postcode": "85015310",
        "street": "401 Bauch Wells",
        "number": 1358,
        "complement": "rem",
        "neighborhood": "non",
        "city": "aliquid",
        "state": "PR",
        "mother_name": "Fredy Lakin",
        "mother_cpf": "08846355970",
        "preferred_day_for_monthly_payment": "5"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/students/{student}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>The ID of the student.</td>
</tr>
</tbody>
</table>
<!-- END_9b6130181f7a43c0b235a243cf8e7980 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="php">php</a>
                                    <a href="#" data-language-name="python">python</a>
                              </div>
                </div>
    </div>
  </body>
</html>