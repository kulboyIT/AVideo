<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudHealthcare\Resource;

use Google\Service\CloudHealthcare\HealthcareEmpty;
use Google\Service\CloudHealthcare\HttpBody;
use Google\Service\CloudHealthcare\SearchResourcesRequest;

/**
 * The "fhir" collection of methods.
 * Typical usage is:
 *  <code>
 *   $healthcareService = new Google\Service\CloudHealthcare(...);
 *   $fhir = $healthcareService->fhir;
 *  </code>
 */
class ProjectsLocationsDatasetsFhirStoresFhir extends \Google\Service\Resource
{
  /**
   * Retrieves a Patient resource and resources related to that patient.
   * Implements the FHIR extended operation Patient-everything
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/patient-
   * operations.html#everything),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/patient-
   * operations.html#everything), [R4](http://hl7.org/implement/standards/fhir/R4
   * /patient-operations.html#everything)). On success, the response body contains
   * a JSON-encoded representation of a `Bundle` resource of type `searchset`,
   * containing the results of the operation. Errors generated by the FHIR store
   * contain a JSON-encoded `OperationOutcome` resource describing the reason for
   * the error. If the request cannot be mapped to a valid API method on a FHIR
   * store, a generic GCP error might be returned instead. The resources in scope
   * for the response are: * The patient resource itself. * All the resources
   * directly referenced by the patient resource. * Resources directly referencing
   * the patient resource that meet the inclusion criteria. The inclusion criteria
   * are based on the membership rules in the patient compartment definition
   * ([DSTU2](http://hl7.org/fhir/DSTU2/compartment-patient.html),
   * [STU3](http://www.hl7.org/fhir/stu3/compartmentdefinition-patient.html),
   * [R4](http://hl7.org/fhir/R4/compartmentdefinition-patient.html)), which
   * details the eligible resource types and referencing search parameters. For
   * samples that show how to call `Patient-everything`, see [Getting all patient
   * compartment resources](/healthcare/docs/how-tos/fhir-
   * resources#getting_all_patient_compartment_resources).
   * (fhir.PatientEverything)
   *
   * @param string $name Name of the `Patient` resource for which the information
   * is required.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int _count Maximum number of resources in a page. If not
   * specified, 100 is used. May not be larger than 1000.
   * @opt_param string _page_token Used to retrieve the next or previous page of
   * results when using pagination. Set `_page_token` to the value of _page_token
   * set in next or previous page links' url. Next and previous page are returned
   * in the response bundle's links field, where `link.relation` is "previous" or
   * "next". Omit `_page_token` if no previous request has been made.
   * @opt_param string _since If provided, only resources updated after this time
   * are returned. The time uses the format YYYY-MM-DDThh:mm:ss.sss+zz:zz. For
   * example, `2015-02-07T13:28:17.239+02:00` or `2017-01-01T00:00:00Z`. The time
   * must be specified to the second and include a time zone.
   * @opt_param string _type String of comma-delimited FHIR resource types. If
   * provided, only resources of the specified resource type(s) are returned.
   * @opt_param string end The response includes records prior to the end date. If
   * no end date is provided, all records subsequent to the start date are in
   * scope.
   * @opt_param string start The response includes records subsequent to the start
   * date. If no start date is provided, all records prior to the end date are in
   * scope.
   * @return HttpBody
   */
  public function PatientEverything($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('Patient-everything', [$params], HttpBody::class);
  }
  /**
   * Deletes all the historical versions of a resource (excluding the current
   * version) from the FHIR store. To remove all versions of a resource, first
   * delete the current version and then call this method. This is not a FHIR
   * standard operation. For samples that show how to call `Resource-purge`, see
   * [Deleting historical versions of a FHIR resource](/healthcare/docs/how-tos
   * /fhir-resources#deleting_historical_versions_of_a_fhir_resource).
   * (fhir.ResourcePurge)
   *
   * @param string $name The name of the resource to purge.
   * @param array $optParams Optional parameters.
   * @return HealthcareEmpty
   */
  public function ResourcePurge($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('Resource-purge', [$params], HealthcareEmpty::class);
  }
  /**
   * Validates an input FHIR resource's conformance to its profiles and the
   * profiles configured on the FHIR store. Implements the FHIR extended operation
   * $validate ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/resource-
   * operations.html#validate),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/resource-
   * operations.html#validate), or [R4](http://hl7.org/implement/standards/fhir/R4
   * /resource-operation-validate.html)). The request body must contain a JSON-
   * encoded FHIR resource, and the request headers must contain `Content-Type:
   * application/fhir+json`. The `Parameters` input syntax is not supported. The
   * `profile` query parameter can be used to request that the resource only be
   * validated against a specific profile. If a profile with the given URL cannot
   * be found in the FHIR store then an error is returned. Errors generated by
   * validation contain a JSON-encoded `OperationOutcome` resource describing the
   * reason for the error. If the request cannot be mapped to a valid API method
   * on a FHIR store, a generic GCP error might be returned instead.
   * (fhir.ResourceValidate)
   *
   * @param string $parent The name of the FHIR store that holds the profiles
   * being used for validation.
   * @param string $type The FHIR resource type of the resource being validated.
   * For a complete list, see the FHIR Resource Index
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/resourcelist.html),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/resourcelist.html), or
   * [R4](http://hl7.org/implement/standards/fhir/R4/resourcelist.html)). Must
   * match the resource type in the provided content.
   * @param HttpBody $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string profile A profile that this resource should be validated
   * against.
   * @return HttpBody
   */
  public function ResourceValidate($parent, $type, HttpBody $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'type' => $type, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('Resource-validate', [$params], HttpBody::class);
  }
  /**
   * Gets the FHIR capability statement ([STU3](http://hl7.org/implement/standards
   * /fhir/STU3/capabilitystatement.html),
   * [R4](http://hl7.org/implement/standards/fhir/R4/capabilitystatement.html)),
   * or the [conformance
   * statement](http://hl7.org/implement/standards/fhir/DSTU2/conformance.html) in
   * the DSTU2 case for the store, which contains a description of functionality
   * supported by the server. Implements the FHIR standard capabilities
   * interaction
   * ([STU3](http://hl7.org/implement/standards/fhir/STU3/http.html#capabilities),
   * [R4](http://hl7.org/implement/standards/fhir/R4/http.html#capabilities)), or
   * the [conformance interaction](http://hl7.org/implement/standards/fhir/DSTU2/h
   * ttp.html#conformance) in the DSTU2 case. On success, the response body
   * contains a JSON-encoded representation of a `CapabilityStatement` resource.
   * (fhir.capabilities)
   *
   * @param string $name Name of the FHIR store to retrieve the capabilities for.
   * @param array $optParams Optional parameters.
   * @return HttpBody
   */
  public function capabilities($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('capabilities', [$params], HttpBody::class);
  }
  /**
   * Creates a FHIR resource. Implements the FHIR standard create interaction
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/http.html#create),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/http.html#create),
   * [R4](http://hl7.org/implement/standards/fhir/R4/http.html#create)), which
   * creates a new resource with a server-assigned resource ID. The request body
   * must contain a JSON-encoded FHIR resource, and the request headers must
   * contain `Content-Type: application/fhir+json`. On success, the response body
   * contains a JSON-encoded representation of the resource as it was created on
   * the server, including the server-assigned resource ID and version ID. Errors
   * generated by the FHIR store contain a JSON-encoded `OperationOutcome`
   * resource describing the reason for the error. If the request cannot be mapped
   * to a valid API method on a FHIR store, a generic GCP error might be returned
   * instead. For samples that show how to call `create`, see [Creating a FHIR
   * resource](/healthcare/docs/how-tos/fhir-resources#creating_a_fhir_resource).
   * (fhir.create)
   *
   * @param string $parent The name of the FHIR store this resource belongs to.
   * @param string $type The FHIR resource type to create, such as Patient or
   * Observation. For a complete list, see the FHIR Resource Index
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/resourcelist.html),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/resourcelist.html),
   * [R4](http://hl7.org/implement/standards/fhir/R4/resourcelist.html)). Must
   * match the resource type in the provided content.
   * @param HttpBody $postBody
   * @param array $optParams Optional parameters.
   * @return HttpBody
   */
  public function create($parent, $type, HttpBody $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'type' => $type, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], HttpBody::class);
  }
  /**
   * Deletes a FHIR resource. Implements the FHIR standard delete interaction
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/http.html#delete),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/http.html#delete),
   * [R4](http://hl7.org/implement/standards/fhir/R4/http.html#delete)). Note:
   * Unless resource versioning is disabled by setting the
   * disable_resource_versioning flag on the FHIR store, the deleted resources
   * will be moved to a history repository that can still be retrieved through
   * vread and related methods, unless they are removed by the purge method. For
   * samples that show how to call `delete`, see [Deleting a FHIR
   * resource](/healthcare/docs/how-tos/fhir-resources#deleting_a_fhir_resource).
   * (fhir.delete)
   *
   * @param string $name The name of the resource to delete.
   * @param array $optParams Optional parameters.
   * @return HttpBody
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], HttpBody::class);
  }
  /**
   * Executes all the requests in the given Bundle. Implements the FHIR standard
   * batch/transaction interaction ([DSTU2](http://hl7.org/implement/standards/fhi
   * r/DSTU2/http.html#transaction),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/http.html#transaction),
   * [R4](http://hl7.org/implement/standards/fhir/R4/http.html#transaction)).
   * Supports all interactions within a bundle, except search. This method accepts
   * Bundles of type `batch` and `transaction`, processing them according to the
   * batch processing rules
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/http.html#2.1.0.16.1),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/http.html#2.21.0.17.1),
   * [R4](http://hl7.org/implement/standards/fhir/R4/http.html#brules)) and
   * transaction processing rules
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/http.html#2.1.0.16.2),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/http.html#2.21.0.17.2),
   * [R4](http://hl7.org/implement/standards/fhir/R4/http.html#trules)). The
   * request body must contain a JSON-encoded FHIR `Bundle` resource, and the
   * request headers must contain `Content-Type: application/fhir+json`. For a
   * batch bundle or a successful transaction the response body will contain a
   * JSON-encoded representation of a `Bundle` resource of type `batch-response`
   * or `transaction-response` containing one entry for each entry in the request,
   * with the outcome of processing the entry. In the case of an error for a
   * transaction bundle, the response body will contain a JSON-encoded
   * `OperationOutcome` resource describing the reason for the error. If the
   * request cannot be mapped to a valid API method on a FHIR store, a generic GCP
   * error might be returned instead. For samples that show how to call
   * `executeBundle`, see [Managing FHIR resources using FHIR
   * bundles](/healthcare/docs/how-tos/fhir-bundles). (fhir.executeBundle)
   *
   * @param string $parent Name of the FHIR store in which this bundle will be
   * executed.
   * @param HttpBody $postBody
   * @param array $optParams Optional parameters.
   * @return HttpBody
   */
  public function executeBundle($parent, HttpBody $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('executeBundle', [$params], HttpBody::class);
  }
  /**
   * Lists all the versions of a resource (including the current version and
   * deleted versions) from the FHIR store. Implements the per-resource form of
   * the FHIR standard history interaction
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/http.html#history),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/http.html#history),
   * [R4](http://hl7.org/implement/standards/fhir/R4/http.html#history)). On
   * success, the response body contains a JSON-encoded representation of a
   * `Bundle` resource of type `history`, containing the version history sorted
   * from most recent to oldest versions. Errors generated by the FHIR store
   * contain a JSON-encoded `OperationOutcome` resource describing the reason for
   * the error. If the request cannot be mapped to a valid API method on a FHIR
   * store, a generic GCP error might be returned instead. For samples that show
   * how to call `history`, see [Listing FHIR resource versions](/healthcare/docs
   * /how-tos/fhir-resources#listing_fhir_resource_versions). (fhir.history)
   *
   * @param string $name The name of the resource to retrieve.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string _at Only include resource versions that were current at
   * some point during the time period specified in the date time value. The date
   * parameter format is yyyy-mm-ddThh:mm:ss[Z|(+|-)hh:mm] Clients may specify any
   * of the following: * An entire year: `_at=2019` * An entire month:
   * `_at=2019-01` * A specific day: `_at=2019-01-20` * A specific second:
   * `_at=2018-12-31T23:59:58Z`
   * @opt_param int _count The maximum number of search results on a page. If not
   * specified, 100 is used. May not be larger than 1000.
   * @opt_param string _page_token Used to retrieve the first, previous, next, or
   * last page of resource versions when using pagination. Value should be set to
   * the value of `_page_token` set in next or previous page links' URLs. Next and
   * previous page are returned in the response bundle's links field, where
   * `link.relation` is "previous" or "next". Omit `_page_token` if no previous
   * request has been made.
   * @opt_param string _since Only include resource versions that were created at
   * or after the given instant in time. The instant in time uses the format YYYY-
   * MM-DDThh:mm:ss.sss+zz:zz (for example 2015-02-07T13:28:17.239+02:00 or
   * 2017-01-01T00:00:00Z). The time must be specified to the second and include a
   * time zone.
   * @return HttpBody
   */
  public function history($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('history', [$params], HttpBody::class);
  }
  /**
   * Updates part of an existing resource by applying the operations specified in
   * a [JSON Patch](http://jsonpatch.com/) document. Implements the FHIR standard
   * patch interaction
   * ([STU3](http://hl7.org/implement/standards/fhir/STU3/http.html#patch),
   * [R4](http://hl7.org/implement/standards/fhir/R4/http.html#patch)). DSTU2
   * doesn't define a patch method, but the server supports it in the same way it
   * supports STU3. The request body must contain a JSON Patch document, and the
   * request headers must contain `Content-Type: application/json-patch+json`. On
   * success, the response body contains a JSON-encoded representation of the
   * updated resource, including the server-assigned version ID. Errors generated
   * by the FHIR store contain a JSON-encoded `OperationOutcome` resource
   * describing the reason for the error. If the request cannot be mapped to a
   * valid API method on a FHIR store, a generic GCP error might be returned
   * instead. For samples that show how to call `patch`, see [Patching a FHIR
   * resource](/healthcare/docs/how-tos/fhir-resources#patching_a_fhir_resource).
   * (fhir.patch)
   *
   * @param string $name The name of the resource to update.
   * @param HttpBody $postBody
   * @param array $optParams Optional parameters.
   * @return HttpBody
   */
  public function patch($name, HttpBody $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], HttpBody::class);
  }
  /**
   * Gets the contents of a FHIR resource. Implements the FHIR standard read
   * interaction
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/http.html#read),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/http.html#read),
   * [R4](http://hl7.org/implement/standards/fhir/R4/http.html#read)). Also
   * supports the FHIR standard conditional read interaction
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/http.html#cread),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/http.html#cread),
   * [R4](http://hl7.org/implement/standards/fhir/R4/http.html#cread)) specified
   * by supplying an `If-Modified-Since` header with a date/time value or an `If-
   * None-Match` header with an ETag value. On success, the response body contains
   * a JSON-encoded representation of the resource. Errors generated by the FHIR
   * store contain a JSON-encoded `OperationOutcome` resource describing the
   * reason for the error. If the request cannot be mapped to a valid API method
   * on a FHIR store, a generic GCP error might be returned instead. For samples
   * that show how to call `read`, see [Getting a FHIR resource](/healthcare/docs
   * /how-tos/fhir-resources#getting_a_fhir_resource). (fhir.read)
   *
   * @param string $name The name of the resource to retrieve.
   * @param array $optParams Optional parameters.
   * @return HttpBody
   */
  public function read($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('read', [$params], HttpBody::class);
  }
  /**
   * Searches for resources in the given FHIR store according to criteria
   * specified as query parameters. Implements the FHIR standard search
   * interaction
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/http.html#search),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/http.html#search),
   * [R4](http://hl7.org/implement/standards/fhir/R4/http.html#search)) using the
   * search semantics described in the FHIR Search specification
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/search.html),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/search.html),
   * [R4](http://hl7.org/implement/standards/fhir/R4/search.html)). Supports four
   * methods of search defined by the specification: * `GET [base]?[parameters]`
   * to search across all resources. * `GET [base]/[type]?[parameters]` to search
   * resources of a specified type. * `POST [base]/_search?[parameters]` as an
   * alternate form having the same semantics as the `GET` method across all
   * resources. * `POST [base]/[type]/_search?[parameters]` as an alternate form
   * having the same semantics as the `GET` method for the specified type. The
   * `GET` and `POST` methods do not support compartment searches. The `POST`
   * method does not support `application/x-www-form-urlencoded` search
   * parameters. On success, the response body contains a JSON-encoded
   * representation of a `Bundle` resource of type `searchset`, containing the
   * results of the search. Errors generated by the FHIR store contain a JSON-
   * encoded `OperationOutcome` resource describing the reason for the error. If
   * the request cannot be mapped to a valid API method on a FHIR store, a generic
   * GCP error might be returned instead. The server's capability statement,
   * retrieved through capabilities, indicates what search parameters are
   * supported on each FHIR resource. A list of all search parameters defined by
   * the specification can be found in the FHIR Search Parameter Registry
   * ([STU3](http://hl7.org/implement/standards/fhir/STU3/searchparameter-
   * registry.html), [R4](http://hl7.org/implement/standards/fhir/R4
   * /searchparameter-registry.html)). FHIR search parameters for DSTU2 can be
   * found on each resource's definition page. Supported search modifiers:
   * `:missing`, `:exact`, `:contains`, `:text`, `:in`, `:not-in`, `:above`,
   * `:below`, `:[type]`, `:not`, and `:recurse`. Supported search result
   * parameters: `_sort`, `_count`, `_include`, `_revinclude`, `_summary=text`,
   * `_summary=data`, and `_elements`. The maximum number of search results
   * returned defaults to 100, which can be overridden by the `_count` parameter
   * up to a maximum limit of 1000. If there are additional results, the returned
   * `Bundle` contains a link of `relation` "next", which has a `_page_token`
   * parameter for an opaque pagination token that can be used to retrieve the
   * next page. Resources with a total size larger than 5MB or a field count
   * larger than 50,000 might not be fully searchable as the server might trim its
   * generated search index in those cases. Note: FHIR resources are indexed
   * asynchronously, so there might be a slight delay between the time a resource
   * is created or changes and when the change is reflected in search results. For
   * samples and detailed information, see [Searching for FHIR
   * resources](/healthcare/docs/how-tos/fhir-search) and [Advanced FHIR search
   * features](/healthcare/docs/how-tos/fhir-advanced-search). (fhir.search)
   *
   * @param string $parent Name of the FHIR store to retrieve resources from.
   * @param SearchResourcesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return HttpBody
   */
  public function search($parent, SearchResourcesRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('search', [$params], HttpBody::class);
  }
  /**
   * Searches for resources in the given FHIR store according to criteria
   * specified as query parameters. Implements the FHIR standard search
   * interaction
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/http.html#search),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/http.html#search),
   * [R4](http://hl7.org/implement/standards/fhir/R4/http.html#search)) using the
   * search semantics described in the FHIR Search specification
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/search.html),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/search.html),
   * [R4](http://hl7.org/implement/standards/fhir/R4/search.html)). Supports four
   * methods of search defined by the specification: * `GET [base]?[parameters]`
   * to search across all resources. * `GET [base]/[type]?[parameters]` to search
   * resources of a specified type. * `POST [base]/_search?[parameters]` as an
   * alternate form having the same semantics as the `GET` method across all
   * resources. * `POST [base]/[type]/_search?[parameters]` as an alternate form
   * having the same semantics as the `GET` method for the specified type. The
   * `GET` and `POST` methods do not support compartment searches. The `POST`
   * method does not support `application/x-www-form-urlencoded` search
   * parameters. On success, the response body contains a JSON-encoded
   * representation of a `Bundle` resource of type `searchset`, containing the
   * results of the search. Errors generated by the FHIR store contain a JSON-
   * encoded `OperationOutcome` resource describing the reason for the error. If
   * the request cannot be mapped to a valid API method on a FHIR store, a generic
   * GCP error might be returned instead. The server's capability statement,
   * retrieved through capabilities, indicates what search parameters are
   * supported on each FHIR resource. A list of all search parameters defined by
   * the specification can be found in the FHIR Search Parameter Registry
   * ([STU3](http://hl7.org/implement/standards/fhir/STU3/searchparameter-
   * registry.html), [R4](http://hl7.org/implement/standards/fhir/R4
   * /searchparameter-registry.html)). FHIR search parameters for DSTU2 can be
   * found on each resource's definition page. Supported search modifiers:
   * `:missing`, `:exact`, `:contains`, `:text`, `:in`, `:not-in`, `:above`,
   * `:below`, `:[type]`, `:not`, and `:recurse`. Supported search result
   * parameters: `_sort`, `_count`, `_include`, `_revinclude`, `_summary=text`,
   * `_summary=data`, and `_elements`. The maximum number of search results
   * returned defaults to 100, which can be overridden by the `_count` parameter
   * up to a maximum limit of 1000. If there are additional results, the returned
   * `Bundle` contains a link of `relation` "next", which has a `_page_token`
   * parameter for an opaque pagination token that can be used to retrieve the
   * next page. Resources with a total size larger than 5MB or a field count
   * larger than 50,000 might not be fully searchable as the server might trim its
   * generated search index in those cases. Note: FHIR resources are indexed
   * asynchronously, so there might be a slight delay between the time a resource
   * is created or changes and when the change is reflected in search results. For
   * samples and detailed information, see [Searching for FHIR
   * resources](/healthcare/docs/how-tos/fhir-search) and [Advanced FHIR search
   * features](/healthcare/docs/how-tos/fhir-advanced-search). (fhir.searchType)
   *
   * @param string $parent Name of the FHIR store to retrieve resources from.
   * @param string $resourceType The FHIR resource type to search, such as Patient
   * or Observation. For a complete list, see the FHIR Resource Index
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/resourcelist.html),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/resourcelist.html),
   * [R4](http://hl7.org/implement/standards/fhir/R4/resourcelist.html)).
   * @param SearchResourcesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return HttpBody
   */
  public function searchType($parent, $resourceType, SearchResourcesRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'resourceType' => $resourceType, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('search-type', [$params], HttpBody::class);
  }
  /**
   * Updates the entire contents of a resource. Implements the FHIR standard
   * update interaction
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/http.html#update),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/http.html#update),
   * [R4](http://hl7.org/implement/standards/fhir/R4/http.html#update)). If the
   * specified resource does not exist and the FHIR store has enable_update_create
   * set, creates the resource with the client-specified ID. It is strongly
   * advised not to include or encode any sensitive data such as patient
   * identifiers in client-specified resource IDs. Those IDs are part of the FHIR
   * resource path recorded in Cloud Audit Logs and Pub/Sub notifications. Those
   * IDs can also be contained in reference fields within other resources. The
   * request body must contain a JSON-encoded FHIR resource, and the request
   * headers must contain `Content-Type: application/fhir+json`. The resource must
   * contain an `id` element having an identical value to the ID in the REST path
   * of the request. On success, the response body contains a JSON-encoded
   * representation of the updated resource, including the server-assigned version
   * ID. Errors generated by the FHIR store contain a JSON-encoded
   * `OperationOutcome` resource describing the reason for the error. If the
   * request cannot be mapped to a valid API method on a FHIR store, a generic GCP
   * error might be returned instead. For samples that show how to call `update`,
   * see [Updating a FHIR resource](/healthcare/docs/how-tos/fhir-
   * resources#updating_a_fhir_resource). (fhir.update)
   *
   * @param string $name The name of the resource to update.
   * @param HttpBody $postBody
   * @param array $optParams Optional parameters.
   * @return HttpBody
   */
  public function update($name, HttpBody $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('update', [$params], HttpBody::class);
  }
  /**
   * Gets the contents of a version (current or historical) of a FHIR resource by
   * version ID. Implements the FHIR standard vread interaction
   * ([DSTU2](http://hl7.org/implement/standards/fhir/DSTU2/http.html#vread),
   * [STU3](http://hl7.org/implement/standards/fhir/STU3/http.html#vread),
   * [R4](http://hl7.org/implement/standards/fhir/R4/http.html#vread)). On
   * success, the response body contains a JSON-encoded representation of the
   * resource. Errors generated by the FHIR store contain a JSON-encoded
   * `OperationOutcome` resource describing the reason for the error. If the
   * request cannot be mapped to a valid API method on a FHIR store, a generic GCP
   * error might be returned instead. For samples that show how to call `vread`,
   * see [Retrieving a FHIR resource version](/healthcare/docs/how-tos/fhir-
   * resources#retrieving_a_fhir_resource_version). (fhir.vread)
   *
   * @param string $name The name of the resource version to retrieve.
   * @param array $optParams Optional parameters.
   * @return HttpBody
   */
  public function vread($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('vread', [$params], HttpBody::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsDatasetsFhirStoresFhir::class, 'Google_Service_CloudHealthcare_Resource_ProjectsLocationsDatasetsFhirStoresFhir');
