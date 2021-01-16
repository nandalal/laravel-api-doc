# Add Order

---

### Details

| Method | Uri                                      | Authorization |
| :----- | :--------------------------------------- | :------------ |
| POST   | `http://127.0.0.1:8000/api/v1/add-order` | No            |

### Header Params

| Key          | Value              |
| :----------- | :----------------- |
| Accept       | `application/json` |
| Content-Type | `application/json` |

### Request Body Params

```json
{
    "name": "Nandalal",
    "phone": "8078305192",
    "email": "lal@gmail.com",
    "state": 1,
    "district": 2,
    "place": "Ulloor",
    "product": [3, 4],
    "quantity": [3, 5],
    "rate": [50.0, 50.0],
    "total_rate": [150.0, 250.0]
}
```

### Response

```json
{
    "success": true,
    "data": {
        "name": "Nandalal",
        "phone": "Nandalal",
        "email": "lal@gmail.com",
        "state_id": 1,
        "district_id": 2,
        "place": "Ulloor",
        "updated_at": "2021-01-10 23:02:29",
        "created_at": "2021-01-10 23:02:29",
        "id": 10
    },
    "message": "Order stored successfully."
}
```

### Response with error message

```json
{
    "success": false,
    "data": "Validation Error.",
    "message": {
        "email": ["The email has already been taken."]
    }
}
```
