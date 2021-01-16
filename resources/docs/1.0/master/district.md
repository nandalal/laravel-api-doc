# District Listing

---

### Details

| Method | Uri                                                  | Authorization |
| :----- | :--------------------------------------------------- | :------------ |
| GET    | `http://127.0.0.1:8000/api/v1/state-list/{state_id}` | No            |

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
            "id": 3,
            "state_id": 2,
            "name": "Chennai",
            "created_at": "2021-01-10 05:24:33",
            "updated_at": "2021-01-10 05:24:33"
        },
        {
            "id": 4,
            "state_id": 2,
            "name": "Madurai",
            "created_at": "2021-01-10 05:24:33",
            "updated_at": "2021-01-10 05:24:33"
        }
    ]
}
```
