# Order Details

---

### Details

| Method | Uri                                                        | Authorization |
| :----- | :--------------------------------------------------------- | :------------ |
| GET    | `http://127.0.0.1:8000/api/v1/order-details/{customer_id}` | No            |

### Header Params

| Key          | Value              |
| :----------- | :----------------- |
| Accept       | `application/json` |
| Content-Type | `application/json` |


### Request Body Params

```json

```


### Response with data

```json
{
	"status": "ok",
	"data": [
		{
			"id": 3,
			"customer_id": 11,
			"product_id": 2,
			"quantity": 2,
			"rate": "50.00",
			"total_rate": "100.00",
			"created_at": null,
			"updated_at": null,
			"product_list": {
				"id": 2,
				"product_name": "Fish"
			}
		},
		{
			"id": 4,
			"customer_id": 11,
			"product_id": 4,
			"quantity": 6,
			"rate": "50.00",
			"total_rate": "300.00",
			"created_at": null,
			"updated_at": null,
			"product_list": {
				"id": 4,
				"product_name": "Apple"
			}
		}
	]
}
```

### Response without data

```json
{
	"status": "ok",
	"msg": "No Order details for that customer."
}
```
