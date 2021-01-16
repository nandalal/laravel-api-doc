# Overview

---

-   [Base Url]({{route}}/{{version}}#base-url)
-   [Response Structure]({{route}}/{{version}}#response)

<a name="base-url"></a>

## Base Url

<larecipe-badge type="primary" rounded>Localhost</larecipe-badge>

```text
http://127.0.0.1:8000/api/v1/
```

<a name="response"></a>

## Response Structure

<larecipe-badge type="success" rounded>Success</larecipe-badge>

```json
{
	"status": "ok",
	"data": {
		...
	}
}
```

<larecipe-badge type="danger" rounded>Error</larecipe-badge>

```json
{
    "status": "error",
    "error": {
        "msg": "invalid token"
    }
}
```
