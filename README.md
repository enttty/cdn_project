# cdn_project

== Deployment ==
(This guide describes how to build images from the repo sources and deploy cdn_network into an existing eks cluster in the aws cloud. Using different cloud provider services or on-premises hardware SHOULD be possible, but has not been tested and will possibly require a lot of changes to the source code.)
((For installing the required tools (kubectl, aws-cli,..) and setting up an appropriate target cluster in eks, please refer to this guide: https://docs.aws.amazon.com/eks/latest/userguide/getting-started-console.html))
(((If you're using an AWS-Edu-Account, be aware that you can create IAM roles and policies but cannot create Identity providers, which is required for completing the above guide. Instead of creating cluster and nodes through aws-cli, you may use the AWS-Web-Console.)))
