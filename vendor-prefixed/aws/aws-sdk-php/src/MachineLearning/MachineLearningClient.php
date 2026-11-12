<?php
namespace Humanmade\S3_Uploads\Aws\MachineLearning;

use Humanmade\S3_Uploads\Aws\AwsClient;
use Humanmade\S3_Uploads\Aws\CommandInterface;
use Humanmade\S3_Uploads\GuzzleHttp\Psr7\Uri;
use Humanmade\S3_Uploads\Psr\Http\Message\RequestInterface;

/**
 * Amazon Machine Learning client.
 *
 * @method \Humanmade\S3_Uploads\Aws\Result addTags(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createBatchPrediction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createBatchPredictionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createDataSourceFromRDS(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDataSourceFromRDSAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createDataSourceFromRedshift(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDataSourceFromRedshiftAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createDataSourceFromS3(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createDataSourceFromS3Async(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createEvaluation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createEvaluationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createMLModel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createMLModelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result createRealtimeEndpoint(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise createRealtimeEndpointAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteBatchPrediction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteBatchPredictionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteDataSource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteDataSourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteEvaluation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteEvaluationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteMLModel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteMLModelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteRealtimeEndpoint(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteRealtimeEndpointAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result deleteTags(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeBatchPredictions(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeBatchPredictionsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeDataSources(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeDataSourcesAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeEvaluations(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeEvaluationsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeMLModels(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeMLModelsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result describeTags(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getBatchPrediction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getBatchPredictionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getDataSource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getDataSourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getEvaluation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getEvaluationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result getMLModel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise getMLModelAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result predict(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise predictAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateBatchPrediction(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateBatchPredictionAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateDataSource(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateDataSourceAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateEvaluation(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateEvaluationAsync(array $args = [])
 * @method \Humanmade\S3_Uploads\Aws\Result updateMLModel(array $args = [])
 * @method \Humanmade\S3_Uploads\GuzzleHttp\Promise\Promise updateMLModelAsync(array $args = [])
 */
class MachineLearningClient extends AwsClient
{
    public function __construct(array $config)
    {
        parent::__construct($config);
        $list = $this->getHandlerList();
        $list->appendBuild($this->predictEndpoint(), 'ml.predict_endpoint');
    }

    /**
     * Changes the endpoint of the Predict operation to the provided endpoint.
     *
     * @return callable
     */
    private function predictEndpoint()
    {
        return static function (callable $handler) {
            return function (
                CommandInterface $command,
                ?RequestInterface $request = null
            ) use ($handler) {
                if ($command->getName() === 'Predict') {
                    $request = $request->withUri(new Uri($command['PredictEndpoint']));
                }
                return $handler($command, $request);
            };
        };
    }
}
