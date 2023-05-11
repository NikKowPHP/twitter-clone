import React from "react";
import { ReactDOM } from "react";

const Modal = ({ isOpen, onClose, children }) => {
  if (!isOpen) return null;
  return ReactDOM.createPortal(
    <div className="modal">
      <div className="modal-content modal-content-register">
        <button
          type="button"
          className="close btn-empty"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span class="close" aria-hidden="true">
            &times;
          </span>
        </button>
        <div className="modal-body">
					{children}
					</div>
      </div>
    </div>
  );
};

export default Modal;
