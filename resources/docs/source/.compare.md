---
title: API Reference

language_tabs:
- bash
- javascript
- php
- python

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#student


<!-- START_61c992b9faa3bff9c756e4bdf4f2b6a1 -->
## List students

[List all the stored students in the database]

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/students" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/students',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/students'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
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
}
```

### HTTP Request
`GET api/students`


<!-- END_61c992b9faa3bff9c756e4bdf4f2b6a1 -->

<!-- START_058e6d0cac82649086bbc06fe88fd040 -->
## Create a student

[Store a new student in the database]

> Example request:

```bash
curl -X POST \
    "http://localhost/api/students" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Max Silva","birthdate":"26\/08\/1996","grade":5,"postcode":"85015310","street":"Rua Dom \u00c1lvaro Nunes C. de Vaca","number":286,"complement":"Casa","neighborhood":"Batel","city":"Guarapuava","state":"PR","mother_name":"Marlene Campos Bine","mother_cpf":"41029950997","preferred_day_for_monthly_payment":"5"}'

```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/students',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'Max Silva',
            'birthdate' => '26/08/1996',
            'grade' => 5,
            'postcode' => '85015310',
            'street' => 'Rua Dom Álvaro Nunes C. de Vaca',
            'number' => 286,
            'complement' => 'Casa',
            'neighborhood' => 'Batel',
            'city' => 'Guarapuava',
            'state' => 'PR',
            'mother_name' => 'Marlene Campos Bine',
            'mother_cpf' => '41029950997',
            'preferred_day_for_monthly_payment' => '5',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
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
response.json()
```


> Example response (200):

```json
{
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
}
```

### HTTP Request
`POST api/students`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the student (max: 100 characters).
        `birthdate` | string |  required  | The birthdate of the student (format: dd/mm/yyyy).
        `grade` | integer |  required  | The grade of the student (integer between 1-9).
        `postcode` | string |  required  | The postcode of the student address (max: 8 characters), must be a valid one.
        `street` | string |  required  | The street address of the student (max: 120 characters).
        `number` | integer |  required  | The number of the student address.
        `complement` | string |  optional  | The complement of the student address (max: 50 characters).
        `neighborhood` | string |  required  | The neighborhood of the student address (max: 100 characters).
        `city` | string |  required  | The city of the student address.
        `state` | string |  required  | The state of the student address (must be a valid one and max: 2 characters).
        `mother_name` | string |  required  | The name of the student mother.
        `mother_cpf` | string |  required  | The name of the student mother.
        `preferred_day_for_monthly_payment` | string |  required  | The preferred day for the monthly payment ( must be: 5, 10, 15, 20 or 25).
    
<!-- END_058e6d0cac82649086bbc06fe88fd040 -->

<!-- START_cd08c0217fcb17b3adba96eec6de5be5 -->
## Show a student

[Show a specific student by id from the database]

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/students/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/students/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/students/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
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
}
```

### HTTP Request
`GET api/students/{student}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the student.

<!-- END_cd08c0217fcb17b3adba96eec6de5be5 -->

<!-- START_f4798a6166743436fe98df7c0a10ea60 -->
## Update a student

[Update a specific student by id in the database]

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/students/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Max Silva","birthdate":"26\/08\/1996","grade":5,"postcode":"85015310","street":"Rua Dom \u00c1lvaro Nunes C. de Vaca","number":286,"complement":"Casa","neighborhood":"Batel","city":"Guarapuava","state":"PR","mother_name":"Marlene Campos Bine","mother_cpf":"41029950997","preferred_day_for_monthly_payment":"5"}'

```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/students/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'Max Silva',
            'birthdate' => '26/08/1996',
            'grade' => 5,
            'postcode' => '85015310',
            'street' => 'Rua Dom Álvaro Nunes C. de Vaca',
            'number' => 286,
            'complement' => 'Casa',
            'neighborhood' => 'Batel',
            'city' => 'Guarapuava',
            'state' => 'PR',
            'mother_name' => 'Marlene Campos Bine',
            'mother_cpf' => '41029950997',
            'preferred_day_for_monthly_payment' => '5',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
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
response.json()
```


> Example response (200):

```json
{
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
}
```

### HTTP Request
`PUT api/students/{student}`

`PATCH api/students/{student}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the student.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  optional  | The name of the student (max: 100 characters).
        `birthdate` | string |  optional  | The birthdate of the student (format: dd/mm/yyyy).
        `grade` | integer |  optional  | The grade of the student (integer between 1-9).
        `postcode` | string |  optional  | The postcode of the student address (max: 8 characters), must be a valid one.
        `street` | string |  optional  | The street address of the student (max: 120 characters).
        `number` | integer |  optional  | The number of the student address.
        `complement` | string |  optional  | The complement of the student address (max: 50 characters).
        `neighborhood` | string |  optional  | The neighborhood of the student address (max: 100 characters).
        `city` | string |  optional  | The city of the student address.
        `state` | string |  optional  | The state of the student address (must be a valid one and max: 2 characters).
        `mother_name` | string |  optional  | The name of the student mother.
        `mother_cpf` | string |  optional  | The name of the student mother.
        `preferred_day_for_monthly_payment` | string |  optional  | The preferred day for the monthly payment ( must be: 5, 10, 15, 20 or 25).
    
<!-- END_f4798a6166743436fe98df7c0a10ea60 -->

<!-- START_9b6130181f7a43c0b235a243cf8e7980 -->
## Delete a student

[Delete a specific student by id from the database]

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/students/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/students/1',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/students/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
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
}
```

### HTTP Request
`DELETE api/students/{student}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the student.

<!-- END_9b6130181f7a43c0b235a243cf8e7980 -->


