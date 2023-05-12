import React, { useRef } from "react";
import { createPortal } from 'react-dom'

const Modal = ({ isOpen, onClose, children }) => {
  // if (!isOpen) return null;
  const modalRef = useRef;
  return (
    <div className="modal">
      <div className="modal-content modal-content-register">
        <button
          type="button"
          className="close btn-empty"
          onClose={onClose}
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
