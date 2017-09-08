
## 4. mobingi RBAC Arn and Actions

### Arn and Resources

mrn:vendor:aws
mrn:vendor:alicloud
mrn:vendor:k5


mrn:vendor:aws:cred:AAAAAAAAAAAAAAAA


mrn:stack:mo-xxxxxxxxxxxxxxxx

### Actions

|service|action|ex.|endpoint|note|
|:--|:--|:--|:--|:--|
|vendor|describeVendors|vendor:describeVendors|/vendors|
|cred|describeCredentials::aws|vendor:aws:cred:describeCredentials::aws|/credentials/aws|
||describeCredentials::alicloud|vendor:alicloud:cred:describeCredentials::alicloud|/credentials/alicloud|
||createCredential::{vendor}|cred:createCredential::aws||
||deleteCredential::{vendor}|cred:deleteCredential::aws||
|stack|describeStacks|stack:describeStacks|/alm/stack|
||updateStack|||




## 3. Default role configuration

 - RBAC has internal configuration which fixed by mobingiAPI.
 - Deny rules is most high priority, and Deny rules can not overwrite.

### masteruser

 - Masteruser is superuser as system admin. This role is for masteruser.

```
{
    version: "2017-05-05"
    Statement:[
        {
            Effect: "Deny",
            Action: "vendor:describeVendors",
            Resource: [
                "mrn:vendor:alicloud",
                "mrn:vendor:k5"
            ]
        },
        {
            Effect: "Deny",
            Action: [
                "cred:describeCredentials::alicloud",
                "cred:describeCredentials::k5"
            ]
            Resource: [
                "*"
            ]
        },
        {
            Effect: "Deny",
            Action: [
                "userrole:describeUserRole"
            ]
            Resource: [
                "*"
            ]
        },
        {
            Effect: "Deny",
            Action: [
                "stack:createStack",
                "stack:updateStack",
                "github:createGithubLock"
            ]
            Resource: [
                "*"
            ]
        },
        {
            Effect: "Allow",
            Action: [
                "*"
            ]
            Resource: [
                "*"
            ]
        },
    ]

}
```

### subuser

 - Subuser is normal user as end-user. This role is for user account.

```
{
    version: "2017-05-05"
    Statement:[
        {
            Effect: "Deny",
            Action: "vendor:describeVendors",
            Resource: [
                "mrn:vendor:alicloud",
                "mrn:vendor:k5"
            ]
        },
        {
            Effect: "Deny",
            Action: [
                "cred:describeCredentials::alicloud",
                "cred:describeCredentials::k5"
            ]
            Resource: [
                "*"
            ]
        },
        {
            Effect: "Deny",
            Action: [
                "role:describeRoles"
                "role:createRole",
                "role:updateRole",
                "role:deleteRole",
                "user:describeMobingiUsers",
                "user:createMobingiUser",
                "user:deleteMobingiUser",
                "userrole:describeUserRoleByUserName",
                "userrole:createUserRole",
                "userrole:updateUserRole",
                "userrole:deleteUserRole"
            ]
            Resource: [
                "*"
            ]
        },
        {
            Effect: "Deny",
            Action: [
                "cred:createCredentials::aws",
                "cred:deleteCredentials::aws",
                "cred:createCredentials::alicloud",
                "cred:deleteCredentials::alicloud",
                "cred:createCredentials::k5",
                "cred:deleteCredentials::k5"
            ]
            Resource: [
                "*"
            ]
        },
        {
            Effect: "Allow",
            Action: [
                "*"
            ]
            Resource: [
                "*"
            ]
        },
    ]

}

```