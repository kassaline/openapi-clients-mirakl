# # M11Response200Data

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorizedParticipants** | [**\OpenAPI\Client\Mirakl\Model\M11Response200DataAuthorizedParticipants[]**](M11Response200DataAuthorizedParticipants.md) | Thread authorized participants&lt;br/&gt; Those are the participants who are authorized to join the thread. | [optional]
**currentParticipants** | [**\OpenAPI\Client\Mirakl\Model\M11Response200DataCurrentParticipants[]**](M11Response200DataCurrentParticipants.md) | Thread current participants&lt;br/&gt; Those are the participants who have actually participated in the thread, meaning that they are either sender or receivers of at least one message of the thread.&lt;br/&gt; These participants must be on the list of the &lt;code&gt;authorized_participants&lt;/code&gt; | [optional]
**customerOrganization** | [**\OpenAPI\Client\Mirakl\Model\M11Response200DataCustomerOrganization**](M11Response200DataCustomerOrganization.md) |  | [optional]
**dateCreated** | **\DateTime** | Thread created date | [optional]
**dateUpdated** | **\DateTime** | Thread updated date | [optional]
**entities** | [**\OpenAPI\Client\Mirakl\Model\M11Response200DataEntities[]**](M11Response200DataEntities.md) | Thread entities | [optional]
**id** | **string** | Thread id | [optional]
**messages** | [**\OpenAPI\Client\Mirakl\Model\M11Response200DataMessages[]**](M11Response200DataMessages.md) | Thread messages. Limited to the last 100 messages of the thread. Present if with_messages query parameter has been set to true | [optional]
**metadata** | [**\OpenAPI\Client\Mirakl\Model\M11Response200DataMetadata**](M11Response200DataMetadata.md) |  | [optional]
**noStoreReplyNeeded** | [**\OpenAPI\Client\Mirakl\Model\M11Response200DataNoStoreReplyNeeded[]**](M11Response200DataNoStoreReplyNeeded.md) | Thread \&quot;no store reply needed\&quot; actions. Present if \&quot;with_messages\&quot; query parameter has been set to true. | [optional]
**topic** | [**\OpenAPI\Client\Mirakl\Model\M11Response200DataTopic**](M11Response200DataTopic.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
