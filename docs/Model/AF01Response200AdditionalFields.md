# # AF01Response200AdditionalFields

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acceptedValues** | **string[]** | The list of accepted values for this additional field. This field is only present for additional fields of type &#39;LIST&#39; | [optional]
**code** | **string** | Additional field code | [optional]
**description** | **string** | The description of the additional field. | [optional]
**editable** | **bool** | Whether or not the additional field will be editable | [optional]
**entity** | **string** | The object on which the additional field applies | [optional]
**label** | **string** | Additional field label | [optional]
**regex** | **string** | The regular expression that is used to validate the value value of this field.&lt;br/&gt;This field is only present for additional fields of type &#39;REGEX&#39;. | [optional]
**required** | **bool** | Whether or not this additionnal field will be required | [optional]
**type** | **string** | Additional field type:&lt;ul&gt;&lt;li&gt;&lt;strong&gt;STRING&lt;/strong&gt; chain of characters (up to 2000 characters)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;DATE&lt;/strong&gt; date in yyyy-mm-dd format&lt;/li&gt;&lt;li&gt;&lt;strong&gt;NUMERIC&lt;/strong&gt; decimal value (eg 52.63)&lt;/li&gt;&lt;li&gt;&lt;strong&gt;BOOLEAN&lt;/strong&gt; true or false&lt;/li&gt;&lt;li&gt;&lt;strong&gt;LINK&lt;/strong&gt; valid URL&lt;/li&gt;&lt;li&gt;&lt;strong&gt;LIST&lt;/strong&gt; list of values. Valid values are specified in accepted_values field&lt;/li&gt;&lt;li&gt;&lt;strong&gt;REGEX&lt;/strong&gt; regular expression. The regex that is used to validate the value of this field is specified in the regex field&lt;/li&gt;&lt;li&gt;&lt;strong&gt;TEXTAREA&lt;/strong&gt; long chain of characters (up to 5000 characters). May have multiple lines&lt;/li&gt;&lt;/ul&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
