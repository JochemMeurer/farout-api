# API Routes


### Request

`GET /api/customers`
	
    Krijg informatie over alle customers.
    > | http://127.0.0.1:8000/api/customers
    

`GET /api/customers/{customer-id}`

	Krijg informatie over één specifieke customer.
    > | http://127.0.0.1:8000/api/customers/1


`GET /api/trips`
	
    Krijg een lijst van alle trips.
    > | http://127.0.0.1:8000/api/trips
    
    
`GET /api/trips/{country}`
	
    Krijg een lijst met alle trips van het megegeven land.
    > | http://127.0.0.1:8000/api/trips/nederland
  
 
 `GET /api/trips/{country}/{city}`
	
    Krijg een lijst met alle trips van het megegeven land, die naar het megegeven stad gaan.
    > | http://127.0.0.1:8000/api/trips/nederland/ursem
  
