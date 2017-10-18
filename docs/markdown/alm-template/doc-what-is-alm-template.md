### Concepts {#concepts}

- ALM-template is a json or yaml formatted configuration file which defines your cloud-native application's infrastructure design and runtime configuration.

- ALM-template is cloud vendor stateless, which means you write your template once and it works with any cloud platforms such as AWS, AliCloud, OpenStack, etc.

    _(We're still in the process on releasing more vendor integrations, so it may possible that you see the vendor support documented here but hasn't covered in the released open source code.)_

- You can save and reuse ALM-template at anytime.


### How does it work {#how-does-it-work}

- ALM-template is part of Mobingi ALM. You write your ALM-template and paste it on console UI (or through CLI, API), Mobingi ALM will analyze and convert them into each cloud vendor's native configuration standard and provision all necessary resources on your behalf.

- If you specify the runtime configurations of your application in the `container` section of the ALM-template, then Mobingi ALM will also deploy an ALM-agent on each provisioned node to perform application runtime setup and code deployment.

### Read more

- Learn more about [ALM-agent](https://learn.mobingi.com/alm-agent)

- See [example](https://learn.mobingi.com/alm-templates-example-templates) ALM-templates
