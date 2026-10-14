# Load Balancer

Bestellung: `POST /products/loadbalancer/create`. ID: `data.loadbalancer.id`.

Kundenfelder: `name`.

| Feld | Typ | Pflicht | Hinweis |
|---|---|---|---|
| `cluster_id` | string | Ja | required; uuid; exists:rootserver_clusters,id |
| `location_id` | string | Ja | required; uuid; exists:rootserver_locations,id |
| `name` | string | Ja | required; string; max:255 |
| `plan_id` | string | Ja | required; uuid; exists:loadbalancer_plans,id |
| `algorithm` | string | Nein | sometimes; string; in:roundrobin,leastconn,source |
| `sticky_sessions` | boolean | Nein | sometimes; boolean |

API-Key-Rechte für alle Modulansichten und Aktionen: `loadbalancer:create`, `loadbalancer:delete`, `loadbalancer:read`, `loadbalancer:update`.

Verwaltungsaktionen: Backend hinzufügen, Regel erstellen, Einstellungen.

Hinweise:
- No suspend/unsuspend endpoint
