# # M10Response200

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorizedParticipants** | [**\OpenAPI\Client\Mirakl\Model\M10Response200AuthorizedParticipants[]**](M10Response200AuthorizedParticipants.md) | Thread authorized participants&lt;br/&gt; Those are the participants who are authorized to join the thread. | [optional]
**currentParticipants** | [**\OpenAPI\Client\Mirakl\Model\M10Response200CurrentParticipants[]**](M10Response200CurrentParticipants.md) | Thread current participants&lt;br/&gt; Those are the participants who have actually participated in the thread, meaning that they are either sender or receivers of at least one message of the thread.&lt;br/&gt; These participants must be on the list of the &lt;code&gt;authorized_participants&lt;/code&gt; | [optional]
**customerOrganization** | [**\OpenAPI\Client\Mirakl\Model\M10Response200CustomerOrganization**](M10Response200CustomerOrganization.md) |  | [optional]
**dateCreated** | **\DateTime** | Thread created date | [optional]
**dateUpdated** | **\DateTime** | Thread updated date | [optional]
**entities** | [**\OpenAPI\Client\Mirakl\Model\M10Response200Entities[]**](M10Response200Entities.md) | Thread entities | [optional]
**id** | **string** | Thread id | [optional]
**messages** | [**\OpenAPI\Client\Mirakl\Model\M10Response200Messages[]**](M10Response200Messages.md) | Thread messages | [optional]
**metadata** | [**\OpenAPI\Client\Mirakl\Model\M10Response200Metadata**](M10Response200Metadata.md) |  | [optional]
**noStoreReplyNeeded** | [**\OpenAPI\Client\Mirakl\Model\M10Response200NoStoreReplyNeeded[]**](M10Response200NoStoreReplyNeeded.md) | Thread \&quot;no store reply needed\&quot; actions. | [optional]
**topic** | [**\OpenAPI\Client\Mirakl\Model\M10Response200Topic**](M10Response200Topic.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
