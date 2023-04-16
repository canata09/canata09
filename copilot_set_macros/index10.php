<?php 

    protected function deleteLogs ($fromDate, $toDate) : bool
    {
        $this->toolBox()->log()->deleteLogs($fromDate,$toDate);
        $logs = $this->codeModel->all('logs', 'id', 'id');
        foreach ($logs as $log) {
            $id = codeModel->delete('logs', $log->id);
        }
    }

?>