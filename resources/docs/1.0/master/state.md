# State Listing

---

### Details

| Method | Uri                                       | Authorization |
| :----- | :---------------------------------------- | :------------ |
| GET    | `http://127.0.0.1:8000/api/v1/state-list` | No            |

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
            "name": "Kerala"
        },
        {
            "id": 2,
            "name": "Tamilnadu"
        },
        {
            "id": 3,
            "name": "Karnataka"
        },
        {
            "id": 4,
            "name": "AndraPradesh"
        }
    ]
}
```
