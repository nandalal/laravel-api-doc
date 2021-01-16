# Product Listing

---

### Details

| Method | Uri                                         | Authorization |
| :----- | :------------------------------------------ | :------------ |
| GET    | `http://127.0.0.1:8000/api/v1/product-list` | No            |

### Header Params

| Key          | Value              |
| :----------- | :----------------- |
| Accept       | `application/json` |
| Content-Type | `application/json` |


### Request Body Params

```json

```

### Response

```json
{
    "status": "ok",
    "data": [
        {
            "id": 1,
            "product_name": "Mango"
        },
        {
            "id": 2,
            "product_name": "Fish"
        },
        {
            "id": 3,
            "product_name": "Lemon"
        },
        {
            "id": 4,
            "product_name": "Apple"
        },
        {
            "id": 5,
            "product_name": "Mobile Phone"
        },
        {
            "id": 6,
            "product_name": "TV"
        },
        {
            "id": 7,
            "product_name": "Onion"
        },
        {
            "id": 8,
            "product_name": "Cake"
        }
    ]
}
```
