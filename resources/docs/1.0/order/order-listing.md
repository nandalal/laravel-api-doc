# Order Listing (Search)

---

### Details

| Method | Uri                                          | Authorization |
| :----- | :------------------------------------------- | :------------ |
| POST   | `http://127.0.0.1:8000/api/v1/order-listing` | No            |

### Header Params

| Key          | Value              |
| :----------- | :----------------- |
| Accept       | `application/json` |
| Content-Type | `application/json` |


### Request Body Params

```json
{
    "search_term": "Nandalal"
}
```

### Response

```json
{
	"status": "ok",
	"data": [
		{
			"id": 11,
			"name": "Shiku",
			"email": "shiku@gmail.com",
			"email_verified_at": null,
			"phone": "Shiku",
			"state_id": 1,
			"district_id": 1,
			"place": "Pattom",
			"created_at": "2021-01-10 23:27:01",
			"updated_at": "2021-01-10 23:27:01",
			"state": {
				"id": 1,
				"name": "Kerala"
			},
			"district": {
				"id": 1,
				"state_id": 1,
				"name": "Trivandrum"
			}
		},
		{
			"id": 10,
			"name": "Nandalal",
			"email": "lal@gmail.com",
			"email_verified_at": null,
			"phone": "Nandalal",
			"state_id": 1,
			"district_id": 2,
			"place": "Ulloor",
			"created_at": "2021-01-10 23:02:29",
			"updated_at": "2021-01-10 23:02:29",
			"state": {
				"id": 1,
				"name": "Kerala"
			},
			"district": {
				"id": 2,
				"state_id": 1,
				"name": "Kollam"
			}
		}
	]
}
```
