<?php
declare(strict_types=1);
class Modal
{
    private string $id;
    private string $header;
    private string $body;
    private string $classes;

    /**
     * @param string $id
     * @param string $header
     * @param string $body
     * @param string $classes
     */
    public function __construct(string $id, string $header, string $body, string $classes)
    {
        $this->id = $id;
        $this->header = $header;
        $this->body = $body;
        $this->classes = $classes;
    }


    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getClasses(): string
    {
        return $this->classes;
    }

    /**
     * @param string $classes
     */
    public function setClasses(string $classes): void
    {
        $this->classes = $classes;
    }

    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @param string $header
     */
    public function setHeader(string $header): void
    {
        $this->header = $header;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    public function render():string
    {
        $modal_template = '
    <div id="%s" class="modal %s">
      <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-wrapper">
            <div class="modal-header"> %s</div>
            <div class="modal-body">%s</div>
        </div>
      </div>
    </div>
        ';
        $modal_template = sprintf($modal_template, $this->getId(), $this->getClasses(), $this->getHeader(), $this->getBody());
        return $modal_template;
    }

}

?>

